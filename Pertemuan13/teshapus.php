<?php
include('crudmhs.php');
$nim = $_GET['nim'];
$hasil = hapusMhs($nim);
if($hasil > 0){
header("Location: bacamhs2.php");
}else {
echo 'Gagal menghapus record';
}
?>