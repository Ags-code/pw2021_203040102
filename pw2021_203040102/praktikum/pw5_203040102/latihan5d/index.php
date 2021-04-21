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
    <title>Latihan4c_203040102</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>

<h1>Daftar Gadget</h1>

    <?php $i = 1;?>
    <?php foreach( $gadget as $gdt) : ?>
        <p class="nama">
            <a href="php/detail.php?id=<?= $gdt['id']; ?>"><?= $gdt["nama"]; ?></a>
        </p>
    <?php endforeach; ?>
</body>
</html>