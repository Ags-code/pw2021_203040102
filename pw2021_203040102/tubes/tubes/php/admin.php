<?php

// Nama : Agung Septiana
// Npm  : 203040102
// Shift : Kamis 08:00 - 09:00
session_start();
require 'functions.php';
 

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

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
    <title>Agung Strore - Beli Gadget di Agung Store</title>
    <link rel="stylesheet" href="../CSS/styleAdmin.css">
</head>
<body>
    <section>
        <div class="container">
            <header>
                <a href="#" class="logo"><img src="../assets/img/hp.png" width="25px"> Agung Store</a>
                <ul>
                    <li><a href="logout.php" class="active"><img src="../assets/img/logout.png" width="12px" style="color: #191970;"> Logout</a></li>
                    <li><a href="tambah.php"><img src="../assets/img/plus.png" width="12px"> Tambah Data</a></li>
                    <li><form action="" method="GET">
                            <div class="inputbox">
                                <input type="text" name="keyword" autofocus autocomplete="off" id="keyword">
                                <button type="submit" name="cari" id="tombol-cari">Cari</button>
                            </div>
                        </form>
                    </li>
                </ul>
            </header>
            <main>
                <section class="glass">
                    <div class="dashboard">
                        <div class="user">
                            <img src="../assets/img/agung.jpg" alt="" width="60px" border-radius="50%"/>
                            <a href="user.php"><h3>Agung Septiana</h3></a>
                            <p>Web Development</p>
                        </div>
                        <div class="links">
                            <div class="link">
                                <img src="../assets/img/home.png" alt="" width="20px" />
                                <a href=""><h2> Dashboard</h2></a>
                            </div>
                            <div class="link">
                                <img src="../assets/img/user-avatar-with-check-mark.png" alt="" width="20px" />
                                <a href="master.php"><h2> Admin</h2></a>
                            </div>
                            <div class="link">
                                <img src="../assets/img/phone.png" alt="" width="20px" />
                                <a href="contact.php"><h2> Contact</h2></a>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
            <div class="content" id="content">
                <?php if(empty($gadget)) : ?>
                    <h1>Data tidak ditemukan</h1>
                <?php else : ?>
                <?php foreach ($gadget as $gdt) : ?>
                <div class="cards">
                    <div class="card">
                        <div class="btn">
                            <a href="ubah.php?id=<?= $gdt['id']; ?>"><button>Ubah</button></a>
                            <a href="hapus.php?id=<?= $gdt['id']; ?>" onclick="return confirm('Yakin mau dihapus?')"><button>Hapus</button></a>
                            <br>
                        </div>
                        <br>
                        <img src="../assets/img/<?= $gdt['img']; ?>" alt="" width="100px">
                        <br>
                        <h2><?= $gdt['nama']?></h2>
                        <br>
                        <p><?= $gdt['harga']?></p>
                        <br>
                        <div class="kategori">
                            <a href="detail.php">Detail</a>
                        </div>
                        <br>
                    </div>
                </div>
                <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <ul class="sci">
                <li><a href="https://www.facebook.com/agung.septiana.986" target="_blank"><img src="../assets/img/facebook.png" alt="" width="40px"></a></li>
                <li><a href="https://instagram.com/agung_septiana02" class="instagram" target="_blank"><img src="../assets/img/instagram.png" alt="" width="40px"></a></li>
                <li><a href="https://twitter.com/AgungSeptiana16" target="_blank"><img src="../assets/img/twitter.png" alt="" width="40px"></a></li>
                <li><a href="#"><img src="../assets/img/008-youtube.png" alt="" width="40px"></a></li>
                <li><a href="https://github.com/ags-code" target="_blank"><img src="../assets/img/github.png" alt="" width="40px"></a></li>
            </ul>
            <p class="copyrightText">Copyright © 2021 Agung Septiana. All Right Reserved.</p>
        </div>
    </section>

    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/script3.js"></script>
</body>
</html>