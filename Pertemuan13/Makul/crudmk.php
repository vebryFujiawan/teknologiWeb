<?php
require_once 'koneksiakad.php';

// membaca (select) tabel matakuliah
// jika berhasil, hasil array dr baris-baris data
// dan setiap baris data berupa array dari nama-nama field
// jika tidak ada, hasil berupa nilai null
function bacaMtKuliah($sql) {
    $data = array();
    $koneksi = koneksiAkademik();
    $hasil = mysqli_query($koneksi, $sql);

    // jika tidak ada record, hasil berupa null
    if (mysqli_num_rows($hasil) == 0) {
        mysqli_close($koneksi);
        return null;
    }

    $i=0;
    while($baris = mysqli_fetch_assoc($hasil)) {
        $data[$i]['kode']= $baris['kode'];
        $data[$i]['nama'] = $baris['nama'];
        $data[$i]['sks'] = $baris['sks'];
        $i++;
    }

    mysqli_close($koneksi);
    return $data;
}

// menambah (create) record
// data baru berupa kode nama, sks
// dimasukkan dalam parameter fungsi
function tambahMtkKuliah($kode, $nama, $sks) {
    $koneksi = koneksiAkademik();
    $sql = "insert into matakuliah values('$kode', '$nama', '$sks')";
    $hasil = 0;

    if (mysqli_query($koneksi, $sql)) {
        $hasil = 1;
        mysqli_close($koneksi);

        return $hasil;
    }
}

// menghapus (delete) record berdasar kode
// data baru berupa kode, nama, sks
// dimasukkan dalam parameter fungsi
function hapusMtkKuliah($kode) {
    $koneksi = koneksiAkademik();
    $sql = "delete from matakuliah where kode='$kode'";

    if (mysqli_query($koneksi, $sql)) {
        $hasil = true;
    } else {
        $hasil = "Error menghapus record: " . mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
    return $hasil;
}

// mencari data berdasar kode
// jika ada, hasil array dengan indeks berupa nama field
// jika tidak ada hasil berupa nilai null
function cariMtKuliah($kode) {
    $koneksi = koneksiAkademik();
    $sql = "select * from matakuliah where kode='$kode'";
    $hasil = mysqli_query($koneksi, $sql);

    if(mysqli_num_rows($hasil)>0) {
        $baris=mysqli_fetch_assoc($hasil);

        $data['kode']=$baris['kode'];
        $data['nama'] = $baris['nama'];
        $data['sks'] = $baris['sks'];

        mysqli_close($koneksi);
        return $data;
    } else {
        mysqli_close($koneksi);
        return null;
    }
}

// mencari data berdasar kode
// jika ada, hasil array dr baris-baris data
// dan setiap baris data berupa array dari nama-nama field
// jika tidak ada hasil berupa nilai null
function cariMtKuliahDariKode($kode) {
    $sql ="select * from matakuliah where kode='$kode'";
    $data = bacaMtKuliah($sql);

    return $data;
}

// mengubah (update) record berdasar kode
// data baru berupa nama, kelamin, jurusan
// dimasukkan dalam parameter fungsi
function ubahMtKuliah($kode, $nama, $sks) {
    $koneksi = koneksiAkademik();

    $sql = "UPDATE matakuliah
    SET nama = '$nama',
    sks = '$sks'
    WHERE kode = '$kode'";

    if (mysqli_query($koneksi, $sql)) {
        $hasil = true;
    } else {
        $hasil = "Error mengubah record: " . mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
    return $hasil;
}