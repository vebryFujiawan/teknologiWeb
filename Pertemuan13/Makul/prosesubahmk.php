<?php
    include('crudmk.php');

    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $sks = $_POST['sks'];

    $hasil = ubahMtKuliah($kode, $nama, $sks);

    if($hasil > 0) {
        header("Location: ubahmk.php");
    } else {
        header("Location: gagalubahmk.php");
    }

?>