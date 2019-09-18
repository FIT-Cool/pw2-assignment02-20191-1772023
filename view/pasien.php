<?php
$submitted = filter_input(INPUT_POST,'btnSubmit');
if(isset($submitted)){
    $mid = filter_input(INPUT_POST,'txtNP');
    $cid = filter_input(INPUT_POST,'txtIP');
    $name = filter_input(INPUT_POST,'txtName');
    $addr = filter_input(INPUT_POST,'txtAddr');
    $bplace = filter_input(INPUT_POST,'txtPL');
    $bdate = filter_input(INPUT_POST,'txtTL');
    $phone = filter_input(INPUT_POST,'txtPhone');
    $inid = filter_input(INPUT_POST,'txtAsuransi');
    addPasien($mid,$cid,$name,$addr,$bplace,$bdate,$phone,$inid);
}
?>
    <form method="post">
        <p>INSERT NEW PASIEN :</p>
        No.Pasien :<input type="text" name="txtNP" id="name"><br>
        ID. Pasien :<input type="text" name="txtIP" id="name"><br>
        Nama :<input type="text" name="txtName" id="name"><br>
        Alamat :<input type="textarea" name="txtAddr" id="name"><br>
        Tempat Lahir :<input type="text" name="txtPL" id="name"><br>
        Tanggal Lahir :<input type="date" name="txtTL" id="name"><br>
        No. HP/Telp :<input type="text" name="txtPhone" id="name"><br>
        Asuransi :
        <?php
        $asuransis = getAllAsuransi();
        echo '<select name="txtAsuransi">';
        foreach ($asuransis as $asuransi) {
            echo '  <option ';
            echo ' value="'.($asuransi['id']).'">'.($asuransi['name_class']);
            echo '</option>';
        }
        echo '<select>';

        ?><br>
        <input name="btnSubmit" type="submit" value="submit">
    </form>

<br> <br> <br>
<table id="tbpasien" class="display">
    <thead>
        <tr>
            <th>No. Pasien</th>
            <th>ID Pasien</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>No. HP/Telp</th>
            <th>Foto</th>
            <th>Asuransi</th>
        </tr>
    </thead>

    <tbody>
        <?php
            $pasiens = getAllPasien();
            foreach ($pasiens as $pasien) {
                $tgl = date_create($pasien['birth_date']);
                echo '<tr>';
                echo '<td>' . $pasien['med_record_number'] . '</td>';
                echo '<td>' . $pasien['citizen_id_number'] . '</td>';
                echo '<td>' . $pasien['name'] . '</td>';
                echo '<td>' . $pasien['address'] . '</td>';
                echo '<td>' . $pasien['birth_place'] . '</td>';
                echo '<td>' . date_format($tgl,'d M Y ').'</td>';
                echo '<td>' . $pasien['phone_number'] . '</td>';
                echo '<td>' . $pasien['photo'] . '</td>';
                echo '<td>' . $pasien['name_class'] . '</td>';
                echo '</tr>';
            }

        ?>
    </tbody>
</table>
