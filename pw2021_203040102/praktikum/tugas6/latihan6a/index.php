<?php

// Nama : Agung Septiana
// Npm  : 203040102
// Shift : Kamis 08:00 - 09:00


require 'php/functions.php';

if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $gadget = query("SELECT * FROM gadget WHERE
            img LIKE '%$keyword%' OR
            nama LIKE '%$keyword%' OR
            deskripsi LIKE '%$keyword%' OR
            harga LIKE '%$keyword%' OR
            kategori LIKE '%$keyword%' ");

} else {
    $gadget = query("SELECT * FROM gadget");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas_203040102</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section>
        <div class="container">
            <header>
                <a href="#" class="logo">Agung Septiana</a>
                <ul>
                    <li><a href="#" class="active">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Team</a></li>
                    <li><a href="#">Contact</a></li>
                    <li>
                        <form action="" method="GET">
                            <input type="text" name="keyword" autofocus>
                            <button type="submit" name="cari">Cari</button>
                        </form>
                    </li>
                </ul>
            </header>
            <div class="content">
                <h2>Daftar Gadget</h2><br>
                <?php if(empty($gadget)) : ?>
                    <h1>Data tidak ditemukan</h1>
                <?php else : ?>
                <?php $i = 1;?>
                <?php foreach( $gadget as $gdt) : ?>
                    <p class="nama">
                        <a href="php/detail.php?id=<?= $gdt['id']; ?>"><?= $gdt["nama"]; ?></a>
                    </p>
                <?php endforeach; ?>
                <?php endif; ?>
                <a href="php/login.php">Masuk ke Halaman Admin</a>
            </div>
            <div class="imgbx">
                <img src="assets/img/kirito.png" width="200px">
            </div>
            <ul class="sci">
                <li><a href="#"><img src="assets/img/facebook.png" alt="" width="40px"></a></li>
                <li><a href="#"><img src="assets/img/instagram.png" alt="" width="40px"></a></li>
                <li><a href="#"><img src="assets/img/twitter.png" alt="" width="40px"></a></li>
            </ul>
            <p class="copyrightText">Copyright © 2021 Agung Septiana. All Right Reserved.</p>
        </div>
    </section>
</body>
</html>