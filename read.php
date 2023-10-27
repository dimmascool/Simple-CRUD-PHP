<?php

require_once 'koneksi.php';

if (isset($_GET['delete_user'])) {
    $user_id = $_GET['delete_user'];

    $do_delete = mysqli_query($koneksi, "DELETE FROM data_mhs WHERE id = '$user_id'");

    if ($do_delete) {
        echo "<script>alert('berhasil menghapus data');location.href='read.php'</script>";
    } else {
        echo "<script>alert('gagal menghapus data');</script>";
        echo mysqli_error($koneksi);
    }
}

$data_mhs = mysqli_query($koneksi, "SELECT * FROM data_mhs");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    :root {
        --blue: #1e90ff;
        --white: #ffffff;
        --black: #000;
    }

    .tambahData {
        background-color: red;
    }

    #tambahData {
        color: var(--white);
    }
</style>

<body>
    <hr>
    <a href="create.php">Tambah data</a>
    <hr>

    <table border="1" style="width: 100%;">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Opsi</th>
        </tr>
        <?php foreach ($data_mhs as $mhs) : ?>
            <tr>
                <td><?= $mhs['nim'] ?></td>
                <td><?= $mhs['nama'] ?></td>
                <td><?= $mhs['kelas'] ?></td>
                <td>
                    <a href="edit.php?mhs=<?= $mhs['id'] ?>">Edit</a> ||
                    <a href="?delete_user=<?= $mhs['id'] ?>">Hapus</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>