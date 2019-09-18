<?php
include_once 'db_function/asuransi_func.php';
include_once 'db_function/pasien_func.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Stefanus Hermawan - 1772023">
    <meta name="description" content="PWL-02 Assignment02 ">

    <link rel="stylesheet" type="text/css" href="src/datatables.css">
    <script type="text/javascript" charset="utf8" src="src/datatables.js"></script>

    <title>PWL02 Assignment02</title>
</head>
<body>
<header>
    <h2>Data Pasien & Asuransi</h2>
</header>
<nav>
    <ul>
        <li><a href="?menu=home">Home</a></li>
        <li><a href="?menu=pasien">Pasien</a></li>
        <li><a href="?menu=asuransi">Asuransi</a></li>
    </ul>
</nav>

<main>
    <?php

    $targetMenu = filter_input(INPUT_GET,'menu');
    switch ($targetMenu){
        case 'home':
            include_once 'view/home.php';
            break;
        case 'pasien':
            include_once 'view/pasien.php';
            break;
        case 'asuransi':
            include_once 'view/asuransi.php';
            break;
        default:
            include_once 'view/home.php';
    }
    ?>
</main>

<footer>
    Pemrograman Web 2 &copy;2019
</footer>
</body>


<script>
    $(document).ready( function () {
        $('#tbpasien').DataTable();
        $('#tbasuransi').DataTable();
    } );

</script>


</html>