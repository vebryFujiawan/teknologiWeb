<?php
    include('crudmk.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cari Matakuliah</title>
</head>

<body>
    <h2 style="color: blue;">Cari Matakuliah</h2>

    <form action="carimk.php" method="get">
        <label>Kode :</label>
        <input type="text" name="cari" value="<?php if (isset($_GET['cari'])) {echo $_GET['cari']; } ?>">
        <input type="submit" value="Cari">
    </form>

    <br>

    <?php
    if (isset($_GET['cari'])) {
        $cari = $_GET['cari'];

        $data = cariMtKuliahDariKode($cari);

        if ($data == null) {
            echo "Data tidak ditemukan";
        } else {
    ?>

    <h2 style="color: blue; margin-top: 44px;">Data Matakuliah</h2>
    <table>
        <?php
            foreach ($data as $mhs) {
                $kode = $mhs['kode'];
                $nama = $mhs['nama'];
                $sks = $mhs['sks'];

                echo "
                <tr>
                    <td>Kode :</td>
                    <td>$kode</td>
                </tr>
                <tr>
                    <td>Nama :</td>
                    <td>$nama</td>
                </tr>
                <tr>
                    <td>SKS :</td>
                    <td>$sks</td>
                </tr>
                ";
            }
                echo '</table>';
        }
    }
    ?>
</body>

</html>