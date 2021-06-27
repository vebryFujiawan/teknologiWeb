<?php
    include('crudmk.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daftar Matakuliah</title>
</head>

<body>
    <h2>Daftar Matakuliah</h2>
    <?php
        $sql ="select * from matakuliah";
        $data = bacaMtKuliah($sql);

        if ($data == null) {
            echo "Tidak ada data matakuliah";
        } else {
    ?>

    <table border="1">
        <tr>
            <th>Kode</th>
            <th>Nama</th>
            <th>sks</th>
        </tr>

        <?php
            foreach($data as $mhs){
                $kode = $mhs['kode'];
                $nama = $mhs['nama'];
                $sks = $mhs['sks'];

                echo "
                <tr>
                <td>$kode</td>
                <td>$nama</td>
                <td>$sks</td>
                </tr>
                ";
            }
             echo '</table>';
        }
    ?>

        <br>
        <a href="tambahmk.php">Tambah Data Matakuliah</a>
</body>

</html>