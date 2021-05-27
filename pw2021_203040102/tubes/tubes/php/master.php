<?php

// Nama : Agung Septiana
// Npm  : 203040102
// Shift : Kamis 08:00 - 09:00

require 'functions.php';

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
    <title>Master</title>
    <link rel="stylesheet" href="../CSS/styleMaster.css">
</head>
<body>
    <section>
        <div class="container">
            <header>
                <a href="#" class="logo"><img src="../assets/img/hp.png" width="25px" style="border: none;"> Agung Store</a>
                <ul>
                    <li><a href="logout.php"><a href="logout.php" class="active"><img src="../assets/img/logout.png" width="15px" style="color: #191970; border:none;"> Logout</a></li>
                    <li><a href="tambah.php"><img src="../assets/img/plus.png" width="15px" style="border: none;"> Tambah Data</a></li>
                    <li><a href="admin.php">Kembali</a></li>
                    <li>
                        <form action="" method="GET" class="inputbox">
                            <input type="text" name="keyword" autofocus autocomplete="off" id="keyword">
                            <button type="submit" name="cari" id="tombol-cari">Cari</button>
                        </form>
                    </li>
                </ul>
            </header>
            <div id="container">
                <h1>Daftar Gadget</h1>
                <table border="1" cellpadding="13" cellspacing="0">
                    <tr>
                        <th>No</th>
                        <th width="120px">Opsi</th>
                        <th>Gambar</th>
                        <th>Nama</th>
                        <th width="400px">Spesifikasi</th>
                        <th>harga</th>
                        <th>Beli</th>
                    </tr>
                    <?php if(empty($gadget)) : ?>
                        <tr>
                            <td colspan="7">
                                <h1>Data tidak ditemukan</h1>
                            </td>
                        </tr>
                    <?php else : ?>
                        <?php $i = 1; ?>
                        <?php foreach ($gadget as $gdt) : ?>
                            <tr class="cvr">
                                <td><?= $i;?></td>
                                <td class="btn">
                                    <a href="ubah.php?id=<?= $gdt['id']; ?>"><button>Ubah</button></a>
                                    <a href="hapus.php?id=<?= $gdt['id']; ?>" onclick="return confirm('Yakin mau dihapus?')"><button>Hapus</button></a>
                                </td>
                                <td><img src="../assets/img/<?= $gdt['img']; ?>" alt="" width="100px"></td>
                                <td><?= $gdt['nama']?></td>
                                <td class="deskripsi"><?= $gdt['deskripsi']?></td>
                                <td><?= $gdt['harga']?></td>
                                <td><div class="kategori"><a href="#"><?= $gdt['kategori']?></a></div></td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </table>
                    <br>
                    <br>
                    <div class="copyrightText">
                        <p>Copyright © 2021 Agung Septiana. All Right Reserved.</p>
                        <br>
                        <a href="admin.php" class="Dasboard">Dasboard</a> > <a href="#" class="mst"> Master</a>
                    </div>
                </div>
        </div>
    </section>
        <script src="../assets/js/script.js"></script>
</body>
</html>