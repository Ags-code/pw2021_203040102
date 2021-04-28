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
    <link rel="stylesheet" href="../CSS/style3.css">
</head>
<body>
    <section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>  
        <div class="box">
            <div class="square" style="--i:0;"></div>
            <div class="square" style="--i:1;"></div>
            <div class="square" style="--i:2;"></div>
            <div class="square" style="--i:3;"></div>
            <div class="square" style="--i:4;"></div>
            <div class="container">
                <div class="form">
                    <div class="inputBox">
                        <img src="../assets/img/<?= $gadget["img"]; ?>" width="120px" left="50px">
                    </div>
                    <div class="Detail">
                        <p class="inputBox"><?= $gadget["nama"];?></p>
                        <p class="inputBox"><?= $gadget["deskripsi"];?></p>
                        <p><br><?= $gadget["harga"];?></p>
                    </div>
                    <div class="inputBox">
                        <button type="submit" name="submit""><?= $gadget["kategori"];?></button>
                            <button type="submit">
                                <a href="../index.php" style="text-decoration:none; color: #666;">Back</a>
                            </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>