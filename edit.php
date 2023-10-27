<?php

require_once 'koneksi.php';

$id = $_GET['mhs'];

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $kelas = $_POST['kelas'];

    $submit_db = mysqli_query($koneksi, "UPDATE data_mhs SET nama ='$nama', nim ='$nim',kelas ='$kelas' WHERE id = '$id'");

    if ($submit_db) {
        echo "<script>alert('berhasil mengubah data');location.href='read.php'</script>";
    } else {
        echo "<script>alert('gagal mengubah data');</script>";
        echo mysqli_error($koneksi);
    }
}

$data_mhs = mysqli_query($koneksi, "SELECT * FROM data_mhs WHERE id = '$id'");
$mhs = mysqli_fetch_assoc($data_mhs);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <label for="">NIM</label>
        <input type="text" name="nim" value="<?= $mhs['nim'] ?>">
        <label for="">Nama</label>
        <input type="text" name="nama" value="<?= $mhs['nama'] ?>">
        <label for="">Kelas</label>
        <input type="text" name="kelas" value="<?= $mhs['kelas'] ?>">
        <input type="submit" name="submit">
    </form>
</body>

</html>