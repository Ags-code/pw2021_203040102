<?php

    // Nama : Agung Septiana
    // Npm  : 203040102
    // Shift : Kamis 08:00 - 09:00

    require 'functions.php';
    $gadget = query("SELECT * FROM gadget")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan5b_203040102</title>
    <link rel="stylesheet" href="../CSS/style2.css">
</head>
<body>
        <a href="tambah.php">
            <div class="inputBox">
                <button type="submit">Tambah Data</button>
            </div>
        </a>
    <h1>Daftar Gadget</h1>
    <table border="1" cellpadding="13" cellspacing="0">
        <tr>
            <th>No</th>
            <th width="120px">Opsi</th>
            <th>Nama</th>
            <th>Gambar</th>
            <th width="530px">Spesifikasi</th>
            <th>harga</th>
            <th>Beli</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($gadget as $gdt) : ?>
            <tr class="cvr">
                <td><?= $i;?></td>
                <td class="btn">
                    <a href=""><button>Ubah</button></a>
                    <a href=""><button>Hapus</button></a>
                </td>
                <td><img src="../assets/img/<?= $gdt['img']; ?>" alt="" width="100px"></td>
                <td><?= $gdt['nama']?></td>
                <td><?= $gdt['deskripsi']?></td>
                <td><?= $gdt['harga']?></td>
                <td><div class="kategori"><a href="#"><?= $gdt['kategori']?></a></div></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>