<!DOCTYPE html>
<html>
<head>
<title>Daftar Mahasiswa</title>
</head>
<body>
<h2>Daftar Mahasiswa</h2>
<table border="1">
<tr>
<th>NIM</th>
<th>Nama</th>
<th>Jenis Kelamin</th>
<th>Jurusan</th>
</tr>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "akademik";
// menciptakan koneksi
$koneksi = mysqli_connect($servername, $username, $password, $dbname);
// Cek koneksi
if (!$koneksi) {
die("Koneksi gagal: " . mysqli_connect_error());
}
$sql = "select * from mahasiswa";
$hasil = mysqli_query($koneksi, $sql);
if (mysqli_num_rows($hasil) > 0) {
// output data setiap baris
while($baris = mysqli_fetch_assoc($hasil)) {
$nim = $baris['nim'];
$nama = $baris['nama'];
$kelamin = $baris['kelamin'];
$jurusan = $baris['jurusan'];
echo "
<tr>
<td>$nim</td>
<td>$nama</td>
<td>$kelamin</td>
<td>$jurusan</td>
</tr>
";

}
} else {
echo "Tidak ada record";
}
mysqli_close($koneksi);
?>
</table>
</body>
</html>