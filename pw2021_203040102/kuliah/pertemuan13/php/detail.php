<?php

require 'functions.php';

$id = $_GET['id'];
$f = query("SELECT * FROM figure WHERE id = $id");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Detail Action Figure</h1>
    <ul>
        <li><img src="../img/<?= $f["gambar"]; ?>" width="100px"></li>
        <li><?= $f["nama"]; ?></li>
        <li><?= $f["harga"]; ?></li>
        <li><?= $f["deskripsi"]; ?></li>
        <li><a href="ubah.php?id=<?= $f['id']; ?>">ubah</a> || <a href="hapus.php?id=<?= $f['id']; ?>" onclick="return confirm ('apakah anda yakin');">hapus</a>
        <li><a href="index.php">Kembali ke daftar action figure</a></li>
        </li>
    </ul>
</body>

</html>