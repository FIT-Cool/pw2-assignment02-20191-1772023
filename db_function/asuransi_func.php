// Tugas PW02 Minggu 02
// 1772023 - Stefanus Hermawan

<?php
function getAllAsuransi(){
    $link = new PDO('mysql:host=localhost;dbname=prakpw220191','root','');
    $link->setAttribute(PDO::ATTR_AUTOCOMMIT,false);
    $link->setAttribute(PDO::ATTR_ERRMODE ,PDO::ERRMODE_EXCEPTION);

    $query = "SELECT * FROM insurance";

    $result = $link->query($query);

    return $result;

}

function addAsuransi($name){
    $link = new PDO('mysql:host=localhost;dbname=prakpw220191','root','');
    $link->setAttribute(PDO::ATTR_AUTOCOMMIT,false);
    $link->setAttribute(PDO::ATTR_ERRMODE ,PDO::ERRMODE_EXCEPTION);
    $link->beginTransaction();
    $query = "INSERT INTO insurance(name_class) VALUES(?)";

    $stmt = $link->prepare($query);
    $stmt->bindParam(1,$name,PDO::PARAM_STR);
    if ($stmt->execute()){
        $link->commit();
    }else{
        $link->rollBack();
    }

    $link = null;

}
