<?php 
$pemain_bola = [
    "Mohammad Salah",
    "Cristiano Ronaldo",
    "Lionel Messi",
    "Zlatan Ibrahimovic",
    "Neymar Jr"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan3b_203040102</title>
</head>
<body>
    <h3>Daftar Pemain Bola Terkenal</h3>
    <ol>
        <?php foreach($pemain_bola as $p) : ?>
            <li><?php echo $p; ?></li>
        <?php endforeach; ?>

    </ol>

    <?php 
    array_push($pemain_bola, "Luca Modric", "Sadio Mane");
    sort($pemain_bola);
    ?>
    <h3>Daftar Pemain Bola Terkenal Baru</h3>
    <ol>
        <?php foreach($pemain_bola as $p) : ?>
            <li><?php echo $p; ?></li>
        <?php endforeach; ?>
    </ol>
</body>
</html>

<!-- Nama : Agung Septiana -->
<!-- NPM  : 203040102 -->
<!-- Shif : Kamis 08:00 - 09:00-->