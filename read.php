<?php

require_once 'koneksi.php';

$data_mhs = mysqli_query($koneksi, "SELECT * FROM data_mhs");

?>

<table border="1" style="width: 100%;">
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Kelas</th>
    </tr>
    <?php foreach ($data_mhs as $mhs) : ?>
        <tr>
            <td><?= $mhs['nim'] ?></td>
            <td><?= $mhs['nama'] ?></td>
            <td><?= $mhs['kelas'] ?></td>
        </tr>
    <?php endforeach ?>
</table>