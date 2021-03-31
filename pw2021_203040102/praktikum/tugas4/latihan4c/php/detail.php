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
    <link rel="stylesheet" href="../CSS/style.css">
    <style>
        body {
            background-image: url(../assets/img/bg.jpg);
            background-size: cover;
        }
        .Detail p {
            color: #fff;
        }
        .button .btn a {
            background: linear-gradient(45deg, #ffbc00, #ff0058);
            box-shadow: 0 15px 35px rgba(0, 0, 0,0.2);
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            color: #fff;
            z-index: 1;
            font-weight: 400;
            letter-spacing: 1px;
            text-decoration: none;
            overflow: hidden;
            transition: 0.5s;
        }
        .button .btn:hover a {
            letter-spacing: 3px;
        }
        .button .btn a::before {
            content: "";
            position: relative;
            top: 0;
            left: 0;
            width: 50%;
            height: 10%;
            background: linear-gradient(to left, rgba(255,255,255,0.15), transparent);
        }
    </style>
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
            <p><div class="kategori"><?= $gadget["kategori"];?></div></p>
        </div>
        <div class="button">
            <div class="btn"><a href="../index.php">Kembali</a></div>
        </div>
    </div>
</body>
</html>