<?php
    include ('crudmhs.php');
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
    <h2>Daftar Mahasiswa</h2>
    Pilih Jurusan :
    <form action="bacamhs3.php" method="post">
    <input type="radio" name="jurusan" value="TI">TI
    <input type="radio" name="jurusan" value="SI">SI
    <input type="radio" name="jurusan" value="MI">MI
    <input type="radio" name="jurusan" value="TK">TK
    <input type="radio" name="jurusan" value="TA">TA
    <br>
    </form>
    <?php
    if(isset($_POST['jurusan'])){
        $jurusan = $_POST['jurusan'];
        $data = bacaMhsPerjurusan($jurusan);
        if($data == null){
            echo "Tidak Ada Data Mahasiswa";
        }else{
           ?>
            Jurusan <?php echo $jurusan; ?><br><br>
            <table border="1">
            <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Kelamin</th>
            </tr>
           <?php
            foreach($data as $mhs){
            $nim = $mhs['nim'];
            $nama = $mhs['nama'];
            $kelamin = $mhs['kelamin'];
            echo "
            <tr>
                <td>&emsp; $nim</td>
                <td>&emsp; $nama</td>
                <td>&emsp; $kelamin</td>
            </tr>
            ";
            }
            echo '</table>';
            }
        }
        ?>
</body>
</html>