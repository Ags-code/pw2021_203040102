<?php

/*
Agung Septiana
203040102
*/
// koneksi ke DB & Pilih Database
require 'functions.php';
$fr = query("SELECT * FROM figure");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
</head>

<body>

    <h1>Action Figure</h1>
    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>#</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>

        <?php $i = 1 ?>
        <?php foreach ($fr as $f) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><img src="img/<?= $f["gambar"]; ?>" width="100px"></td>
                <td><?= $f["nama"]; ?></td>
                <td><?= $f["harga"]; ?></td>
                <td><?= $f["deskripsi"]; ?></td>
                <td><a href="detail.php?id=<?= $f['id'] ?>">Lihat Detail</span></a></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>

    </table>


</body>

</html>