<?php

include ('crudmk.php');

    $kode = $_GET['kode'];

    $hasil = hapusMtkKuliah($kode);

    if ($hasil == true){
        header("Location: hapusmk.php");
    } else {
        header("Location: gagalhapusmk.php");
    }

?>