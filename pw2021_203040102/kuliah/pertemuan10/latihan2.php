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

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Deskripsi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($fr as $f) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="">ubah</a>
                    <a href="">hapus</a>
                </td>
                <td><img src="img/<?= $f["gambar"]; ?>" width="100px"></td>
                <td><?= $f["nama"]; ?></td>
                <td><?= $f["harga"]; ?></td>
                <td><?= $f["deskripsi"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>

    </table>>


</body>

</html>