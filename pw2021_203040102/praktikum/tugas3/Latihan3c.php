<?php 
$pemain_bola = [
    "Christiano Ronaldo" => "Juventus",
    "Lionel Messi" => "Barcelona",
    "Luca Modric" => "Real Madrid",
    "Mohammad Salah" => "LiverPool",
    "Neymar Jr" => "Paris Saint German",
    "Sadio Mane" => "LiverPool",
    "Zlatan Ibrahimovic" => "Ac Milan"
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan3c_203040102</title>
    <style>
    .tabel {
        border: 2px solid black;
        padding: 10px;
        text-align: left;
        font-family: arial;
        width: 50%;

    }
    </style>
</head>
<body> 
<div class="tabel">
<p><b>Daftar pemain bola terkenal dan clubnya</b></p>
        <table>
            <?php foreach ($pemain_bola as $p => $club) : ?>
                <td><b><?= $p;?></b></td>
                <td>:</td>
                <td><?= $club;?></td>
                <tr></tr>
            <?php endforeach; ?>
        </table>
</div>
</body>
</html>
<!-- Nama : Agung Septiana -->
<!-- NPM  : 203040102 -->
<!-- Shif : Kamis 08:00 - 09:00-->