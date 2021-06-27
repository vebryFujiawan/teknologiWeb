<?php
    include 'crudmk.php'
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Data Matakuliah</title>

    <style type="text/css">
    .no-outline {
        border-top-style: hidden;
        border-right-style: hidden;
        border-left-style: hidden;
        border-bottom-style: none;
    }

    .no-outline:focus {
        outline: none;
    }
    </style>
</head>

<body>

    <?php
        $koneksi = koneksiAkademik();
        $kode = $_GET['kode'];
        $data = mysqli_query($koneksi, "select * from matakuliah where kode='$kode'");
        $edit = mysqli_fetch_array($data);
        ?>

    <h1>Daftar Matakuliah</h1>
    <form action="prosesubahmk.php" method="post">
        <table cellpadding="8">
            <tr>
                <td>kode</td>
                <td>: <input type="text" class="no-outline" name="kode" value="<?php echo $edit['kode']; ?>" readonly>
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>: <input type=" text" name="nama" value="<?php echo $edit['nama']; ?>"></td>
            </tr>
            <tr>
                <td>Sks</td>
                <td>: <input type=" text" name="sks" style="width: 26px;" value="<?php echo $edit['sks']; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Ubah">
                    <a href="ubahmk.php"><input type="button" value="Batal"></a>
                </td>
            </tr>
        </table>
    </form>

</body>

</html>