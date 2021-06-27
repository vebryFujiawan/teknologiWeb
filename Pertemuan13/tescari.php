<?php
include('crudmhs.php');
$kondisi = "jurusan = 'MI'";
$data = cariSemuaMhs($kondisi);
if($data != null){
foreach($data as $mhs){
$nim = $mhs['nim'];
$nama = $mhs['nama'];
echo "$nim, $nama <br>";
}
}
else {
echo 'Tidak ada data';
}
?>