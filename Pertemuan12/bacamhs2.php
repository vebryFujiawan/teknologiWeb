<?php
include ('crudmhs.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>DaftarMahasiswa</title>
</head>
<body>
<h2>DaftarMahasiswa</h2>
<?php
$sql ="select * from mahasiswa";
$data = bacaMhs($sql);
if($data == null){
echo "Tidakada data mahasiswa";
}else{
?>
<table border="1">
<tr>
<th>NIM</th>
<th>Nama</th>
<th>JenisKelamin</th>
<th>Jurusan</th>
</tr>
<?php
foreach($data as $mhs){
$nim = $mhs['nim'];
$nama = $mhs['nama'];
$kelamin = $mhs['kelamin'];
$jurusan = $mhs['jurusan'];
echo "
<tr>
<td>$nim</td>
<td>$nama</td>
<td>$kelamin</td>
<td>$jurusan</td>
</tr>
";
}
echo '</table>';
}
?>
<a href="tambahmhs.php">Tambah Data Mahasiswa</a>
</body>
</html>