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
<html lang="en" id="agung">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agung Store - Beli Gadget di Agung Store</title>
    <link rel="stylesheet" href="css/style01.css">
</head>
<body>
    <section id="home" id="agung">
        <div class="container">
            <header>
                <a href="#agung" class="logo"><img src="assets/img/hp.png" width="25px"> Agung Store</a>
                <ul>
                    <li><a href="#home" class="active"><img src="assets/img/home.png" width="12px"> Home</a></li>
                    <li><a href="#about"><img src="assets/img/user-avatar-with-check-mark.png" width="12px"> About</a></li>
                    <li><a href="#product"><img src="assets/img/shop.png" width="12px"> Product</a></li>
                    <li><a href="#contact"><img src="assets/img/phone.png" width="12px"> Contact</a></li>
                    <li>
                        <form action="" method="GET">
                            <input type="text" name="keyword" autofocus autocomplete="off" id="keyword">
                            <button type="submit" name="cari" id="tombol-cari">Cari</button>
                        </form>
                    </li>
                </ul>
            </header>
            <div class="content">
                <h2>Daftar Gadget</h2><br>
                <p>You need a Gadget? But don't have time to visit the Gadget shop? Gadget store Agung Store can be the right choice. You can order it online at home in just seconds.</p>
                <a href="php/login.php"><img src="assets/img/user-avatar-with-check-mark.png" width="20px" style="color: #191970;"> Join Us</a>
            </div>
            <div class="imgbx">
                <img src="assets/img/kirito.png" width="200px">
            </div>
            <ul class="sci">
                <li><a href="https://www.facebook.com/agung.septiana.986" target="_blank"><img src="assets/img/facebook.png" alt="" width="40px"></a></li>
                <li><a href="https://instagram.com/agung_septiana02" class="instagram" target="_blank"><img src="assets/img/instagram.png" alt="" width="40px"></a></li>
                <li><a href="https://twitter.com/AgungSeptiana16" target="_blank"><img src="assets/img/twitter.png" alt="" width="40px"></a></li>
                <li><a href="#"><img src="assets/img/008-youtube.png" alt="" width="40px"></a></li>
                <li><a href="https://github.com/ags-code" target="_blank"><img src="assets/img/github.png" alt="" width="40px"></a></li>
            </ul>
        </div>


    </section>
    <section id="about">
        <div class="container1">
            <header class="me">
                <a href="#" class="about">About Me</a>
            </header>
            <div class="content1">
                <h2>Hi, Iam Agung Septiana</h2>
                <h3>i'm Web Development</h3> <br>
                <p>Agung Septiana adalah Seorang Web Development. Sekarang sedang sibuk kuliah dengan tujuan lulus secepatnya. Lahir di Banten pada tanggal 09 September 2003. Hobbinya adalah Menggambar, dan ngoding. Senang dengan volly dan berjalan kaki karena itu sehat. Penikmat jalan kaki.</p>
                <a href="#product"><img src="assets/img/shop.png" width="20px"> See Product</a>
                </div>
                <div class="imgbx">
                    <img src="assets/img/agung.jpg" width="200px" style="border-radius: 50px;">
                </div>
            </div>
        </div>
    </section>

    <section id="product">
        <div class="container2">
            <header class="produk">
                <a href="#" class="product">Product</a>
            </header>
            <div class="content2" id="container">
                <?php if(empty($gadget)) : ?>
                    <h1>Data tidak ditemukan</h1>
                <?php else : ?>
                <?php foreach ($gadget as $gdt) : ?>
                <div class="cards">
                    <div class="card">
                        <br>
                        <img src="assets/img/<?= $gdt['img']; ?>" alt="" width="100px">
                        <br>
                        <h2><?= $gdt['nama']?></h2>
                        <br>
                        <p><?= $gdt['harga']?></p>
                        <br>
                        <div class="kategori">
                            <a href="php/detail.php?id=<?= $gdt['id']; ?>">Detail</a>
                        </div>
                        <br>
                    </div>
                </div>
                <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="contact" id="contact">
        <div class="container3">
            <h2>Contact Us Form</h2>
            <div class="row100">
                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="" required="required">
                        <span class="text">First Name</span>
                        <span class="line"></span>
                    </div>
                </div>

                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="" required="required">
                        <span class="text">Last Name</span>
                        <span class="line"></span>
                    </div>
                </div>
            </div>

            <div class="row100">
                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="" required="required">
                        <span class="text">Email</span>
                        <span class="line"></span>
                    </div>
                </div>

                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="" required="required">
                        <span class="text">Mobile</span>
                        <span class="line"></span>
                    </div>
                </div>
            </div>

            <div class="row100">
                <div class="col">
                    <div class="inputBox textarea">
                        <textarea required="required"></textarea>
                        <span class="text">Type Your Message Here...</span>
                        <span class="line"></span>
                    </div>
                </div>
            </div>

            <div class="row100">
                <div class="col">
                    <input type="submit" value="send">
                </div>
            </div>
            <div class="copyrightText">
                <p class="copyrightText">  <a href="#agung">Copyright © 2021 Agung Septiana. All Right Reserved.</a> </p>
            </div>
        </div>
    </section>
    <script src="assets/js/script3.js"></script>
</body>
</html>