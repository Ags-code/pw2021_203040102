<?php

    // Nama : Agung Septiana
    // Npm  : 203040102
    // Shift : Kamis 08:00 - 09:00


    require 'php/functions.php';

    $gadget = query("SELECT * FROM gadget")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan4b_203040102</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>

<h1>Daftar Gadget</h1>
<?php $i = 1;?>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Spesifikasi</th>
            <th>Harga</th>
            <th>kategori</th>
        </tr>
    <?php $i = 1;?>
    <?php foreach( $gadget as $gdt) : ?>
        <tr>
            <td><?= $i; ?></td>

            <td>
                <a href="">ubah</a> 
                <a href="">hapus</a>
            </td>
            <td><img src="assets/img/<?= $gdt["img"]; ?>" width="60px"></td>
            <td><?= $gdt["nama"]; ?></td>
            <td><?= $gdt["deskripsi"]; ?></td>
            <td><?= $gdt["harga"]; ?></td>
            <td><div class="kategori"><?= $gdt["kategori"]; ?></div></td>
        </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
    </table>
</body>
</html>