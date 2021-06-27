<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <form action="prosestambah.php" method="post">
    NIM:
    <input type="text" name="nim"></form>
    <br>
     <form action="prosestambah.php" method="post">
    Nama:
    <input type="text" name="nama"></form>
    <br>
    <form action="prosestambah.php" method="post">
    Jenis Kelamin
    <input type="radio" name="kelamin">Laki-Laki
    <input type="radio" name="kelamin">Perempuan
    </form>
    <br>
    <form action="prosestambah.php" method="post">
    Jurusan
    <input type="radio" name="jurusan">MI
    <input type="radio" name="jurusan">TK
    <input type="radio" name="jurusan">KA
    <input type="radio" name="jurusan">TI
    <input type="radio" name="jurusan">SI
    </form>
    <br>
    <input type="submit" name="submit" value="Tambah">

</body>
</html>