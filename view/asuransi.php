// Tugas PW02 Minggu 02
// 1772023 - Stefanus Hermawan
<?php
$submitted = filter_input(INPUT_POST,'btnSubmit');
if(isset($submitted)){
    $name = filter_input(INPUT_POST,'txtName');
    addAsuransi($name);
}
?>
<form method="post">
    <p>INSERT NEW ASURANSI :</p>
    Asuransi Name :<input type="text" name="txtName" id="name">
    <input name="btnSubmit" type="submit" value="submit">
</form>
<br>
<table id="tbasuransi" class="display">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
    </thead>

    <tbody>
        <?php
            $asuransis = getAllAsuransi();
            foreach ($asuransis as $asuransi) {
                echo '<tr>';
                echo '<td>' . $asuransi['id'] . '</td>';
                echo '<td>' . $asuransi['name_class'] . '</td>';
                echo '</tr>';
            }

        ?>
    </tbody>
</table>

