<?php
include('crudmhs.php');
$nim = "202101";
$nama = "ahmad";
$kelamin = "L";
$jurusan = "TI";
$hasil = ubahMhs($nim, $nama, $kelamin, $jurusan);
if($hasil == true){
echo "Berhasil";
}else{
echo "Error";
}
?>