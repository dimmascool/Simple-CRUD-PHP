<?php

require_once 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $kelas = $_POST['kelas'];

    $submit_db = mysqli_query($koneksi, "INSERT INTO data_mhs (`nim`, `nama`, `kelas`) VALUES ('$nim', '$nama', '$kelas')");

    if ($submit_db) {
        echo "<script>alert('berhasil menyimpan data');</script>";
    } else {
        echo "<script>alert('gagal menyimpan data');</script>";
        echo mysqli_error($koneksi);
    }
}
?>

<form action="" method="POST">
    <label for="">NIM</label>
    <input type="text" name="nim">
    <label for="">Nama</label>
    <input type="text" name="nama">
    <label for="">Kelas</label>
    <input type="text" name="kelas">
    <input type="submit" name="submit">
</form>