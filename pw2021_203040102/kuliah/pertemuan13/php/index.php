<?php

/*
Agung Septiana
203040102
Live Searching & Upload Gambar
*/

session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
require 'functions.php';
$fr = query("SELECT * FROM figure");

// ketika tombol cari di klik
if (isset($_POST['cari'])) {
    $fr = cari($_POST['keyword']);
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
</head>

<body>

    <a href="logout.php">Logout</a>
    <h1>Action Figure</h1>

    <a href="tambah.php">Tambah Data Action Figure</a>
    <br><br>

    <form action="" method="post">
        <input type="text" name="keyword" size="40" placeholder="Masukan keyword pencarian..." autocomplete="off" autofocus class="keyword">
        <button type="submit" name="cari" class="tombol-cari">cari</button>
    </form>
    <br>
    <div class="container">
        <table border="1" cellpadding="10" cellspacing="0">

            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>

            <?php if (empty($fr)) : ?>
                <tr>
                    <td colspan="4">
                        <p style="color:red;font-style:italic">data mahasiswa tidak ditemukan!</p>
                    </td>
                </tr>
            <?php endif; ?>

            <?php $i = 1 ?>
            <?php foreach ($fr as $f) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><img src="../img/<?= $f["gambar"]; ?>" width="100px"></td>
                    <td><?= $f["nama"]; ?></td>
                    <td><?= $f["harga"]; ?></td>
                    <td><?= $f["deskripsi"]; ?></td>
                    <td><a href="detail.php?id=<?= $f['id'] ?>">Lihat Detail</span></a></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>

        </table>
    </div>

    <script src="../js/script.js"></script>
</body>

</html>