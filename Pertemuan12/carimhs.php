<?php
    include('crudmhs.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h2>Cari Mahasiswa</h2>
    <form action="carimhs.php" method="post">
    NIM :
    <input type="text" name="nim">
    <input type="submit" name="submit" value="cari">
    </form>
    <?php
    if(isset($_POST['nim'])){
        $nim = $_POST['nim'];
        $data = cariMhsDariNim($nim);
        if($data == null){
            echo "data tidak ada";
        }else{
            ?>
            <table>
            <?php
            foreach ($data as $mhs) {
                $nim = $mhs['nim'];
                $nama = $mhs['nama'];
                $kelamin = $mhs['kelamin'];
                $jurusan = $mhs['jurusan'];
            echo "
                <tr>
                <td>nim</td>
                <td>&emsp; $nim</td>
                </tr><br>
                <tr>
                <td>nama</td>
                <td>&emsp; $nama</td>
                </tr><br>
                <tr>
                <td>kelamin</td>
                <td>&emsp; $kelamin</td>
                </tr><br>
                <tr>
                <td>jurusan</td>
                <td>&emsp; $jurusan</td>
                </tr>
                ";
            }
            echo '</table>';
        }
    }
    ?>
</body>
</html>