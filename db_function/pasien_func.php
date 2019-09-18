// Tugas PW02 Minggu 02
// 1772023 - Stefanus Hermawan
<?php
function getAllPasien(){
    $link = new PDO('mysql:host=localhost;dbname=prakpw220191','root','');
    $link->setAttribute(PDO::ATTR_AUTOCOMMIT,false);
    $link->setAttribute(PDO::ATTR_ERRMODE ,PDO::ERRMODE_EXCEPTION);

    $query = "SELECT p.med_record_number,p.citizen_id_number,p.name,p.address,p.birth_place,p.phone_number,p.photo,p.birth_date,i.id,i.name_class 
    FROM patient p JOIN insurance i ON p.insurance_id = i.id";

    $result = $link->query($query);

    return $result;

}

function addPasien($mid,$cid,$name,$addr,$bplace,$bdate,$phone,$inid){
    $link = new PDO('mysql:host=localhost;dbname=prakpw220191','root','');
    $link->setAttribute(PDO::ATTR_AUTOCOMMIT,false);
    $link->setAttribute(PDO::ATTR_ERRMODE ,PDO::ERRMODE_EXCEPTION);
    $link->beginTransaction();
    $query = "INSERT INTO patient(med_record_number,
                                  citizen_id_number,
                                  name,
                                  address,
                                  birth_place,
                                  birth_date,
                                  phone_number,
                                  insurance_id)
             VALUES(?,?,?,?,?,?,?,?)";

    $stmt = $link->prepare($query);
    $stmt->bindParam(1,$mid,PDO::PARAM_STR);
    $stmt->bindParam(2,$cid,PDO::PARAM_INT);
    $stmt->bindParam(3,$name,PDO::PARAM_STR);
    $stmt->bindParam(4,$addr,PDO::PARAM_STR);
    $stmt->bindParam(5,$bplace,PDO::PARAM_STR);
    $stmt->bindParam(6,$bdate,PDO::PARAM_STR);
    $stmt->bindParam(7,$phone,PDO::PARAM_STR);
    $stmt->bindParam(8,$inid,PDO::PARAM_INT);
    if ($stmt->execute()){
        $link->commit();
    }else{
        $link->rollBack();
    }

    $link = null;

}
