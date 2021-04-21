<?php
 if (!isset($_GET['id'])){


        header("location:../index.php");
        exit;
    }

 require 'functions.php';
 $id = $_GET['id'];
 $gadget = query("SELECT * FROM gadget WHERE id = $id") [0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Detail</title>
    <link rel="stylesheet" href="../CSS/detail.css">
</head>
<body>
    <div class="container">
        <div class="images">
            <img src="../assets/img/<?= $gadget["img"]; ?>" width="120px">
        </div>
        <div class="Detail">
            <p><?= $gadget["nama"];?></p>
            <p><?= $gadget["deskripsi"];?></p>
            <p><?= $gadget["harga"];?></p>
            <p><div class="kategori"><a href="#"><?= $gadget["kategori"];?></a></div></p>
        </div>
        <div class="button">
            <div class="btn"><a href="../index.php">Kembali</a></div>
        </div>
    </div>
</body>
</html>