<?php
require_once 'koneksiakad.php';
// membaca (select) tabelmahasiswa
// jikaberhasil, hasil array drbaris-baris data
// dansetiapbaris data berupa array darinama-nama field
// jikatidakada,hasilberupanilai null
Function bacaMhs($sql){
$data = array();
$koneksi = koneksiAkademik();
$hasil = mysqli_query($koneksi, $sql);
// jikatidakada record, hasilberupa null
if (mysqli_num_rows($hasil) == 0) {
mysqli_close($koneksi);
return null;
}
$i=0;
while($baris = mysqli_fetch_assoc($hasil)){
$data[$i]['nim']= $baris['nim'];
$data[$i]['nama'] = $baris['nama'];
$data[$i]['kelamin'] = $baris['kelamin'];
$data[$i]['jurusan'] = $baris['jurusan'];
$i++;
}
mysqli_close($koneksi);
return $data;
}

function bacaSemuaMhs(){
    return bacaMhs("SELECT * from mahasiswa");
}

function bacaMhsPerjurusan($jurusan){
    return bacaMhs("SELECT * from mahasiswa WHERE jurusan ='$jurusan'");
}

function cariMhsDariNim($nim){
    return bacaMhs("SELECT * from mahasiswa WHERE nim ='$nim'");
}

function tambahMhs($nim, $nama, $kelamin, $jurusan){
    $koneksi = koneksiAkademik();
    $sql = "insert into mahasiswa values('$nim', '$nama', '$kelamin', '$jurusan')";
    $hasil = 0;
    if(mysqli_query($koneksi, $sql))
    $hasil = 1;
    mysqli_close($koneksi);
    return $hasil;
}

// menghapus 1 record berdasar field kunci nim
function hapusMhs($nim){
$koneksi = koneksiAkademik();
$sql = "delete from mahasiswa where nim='$nim'";
if (!mysqli_query($koneksi, $sql)){
die('Error: ' . mysqli_error());
}
$hasil = mysqli_affected_rows($koneksi);
mysqli_close($koneksi);
return $hasil;
}