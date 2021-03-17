<?php
    $action_figure = [
    [
        "picture" => "figure.jpeg",
        "nama" => "Asuka Langley",
        "description" => "Action figure character Asuka Langley from Evangelion: 3.0",
        "price" => "Rp 560,000",
        "category" => "AF Anime",
    ],
    [
        "picture" => "mikasa.jpeg",
        "nama" => "Mikasa Ackerman",
        "description" => "Action figure character Mikasa Ackerman from Shingeki no Kyojin",
        "price" => "Rp 600,000",
        "category" => "AF Anime",
    ],
    [
        "picture" => "goku.jpeg",
        "nama" => "Goku",
        "description" => "Action figure character Goku from Dragon Ball",
        "price" => "Rp 495,000",
        "category" => "AF Anime",
    ],
    [
        "picture" => "ultraman.jpeg",
        "nama" => "Ultraman",
        "description" => "Action figure character Ultraman from Ultraman Be Ultra",
        "price" => "Rp 700,000",
        "category" => "AF Anime",
    ],
    [
        "picture" => "spiderman.jpeg",
        "nama" => "Spiderman",
        "description" => "Action figure character Spiderman as Tom Holand from Spiderman Far From Home",
        "price" => "Rp 625,000",
        "category" => "AF Anime",
    ],
    [
        "picture" => "yukino.png",
        "nama" => "Yukinoshita Yukino",
        "description" => "Action figure character Yukinoshita Yukino from Oregairu",
        "price" => "Rp 365,000",
        "category" => "AF Anime",
    ],
    [
        "picture" => "ell.jpg",
        "nama" => "L",
        "description" => "Action figure character L from Death Note",
        "price" => "Rp 250,000",
        "category" => "AF Anime",
    ],
    [
        "picture" => "luffi.jpg",
        "nama" => "Monkey D Luffy",
        "description" => "Action figure character Monkey D Luffy from One Piece",
        "price" => "Rp 400,000",
        "category" => "AF Anime",
    ],
    [
        "picture" => "hoodie.jpeg",
        "nama" => "Hoddie Yellow",
        "description" => "Original hoodie sevenkey, made of thick cotton fleece and comfortable to wear",
        "price" => "Rp 90,000",
        "category" => "Hoodie",
    ],
    [
        "picture" => "gitar.jpg",
        "nama" => "Guitar",
        "description" => "The original guitar with sounds and melodies that are beautiful and pleasant to hear",
        "price" => "Rp 625,000",
        "category" => "GUitar",
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan3e_203040102</title>
    <style>
        .table {
            width: 100%;
            padding: 10px;
            font-family: arial;
            text-align: left;
        }
        th {
            background-color: green;
        }
        img {
            max-width: 60px;
        }
        a {
            display: inline-block;
            padding: 10px 15px;
            color: #fff;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 10px;
            border-radius: 40px;
            overflow: hidden;
            background: linear-gradient(90deg,#755bea,#ff72c0);
        }
    </style>
</head>
<body>
    <div class="table">
        <table border="1" cellspacing="0" cellpadding="10">
            <th>No</th>
            <th>Picture</th>
            <th>Nama</th>
            <th>Description</th>
            <th>Price</th>
            <th>Category</th>
            <tr></tr>
            <?php $nomor = 1;?>
            <?php foreach ($action_figure as $af) : ?>
               <td><?= $nomor; ?></td> 
               <td><img src="img/<?= $af["picture"]; ?>"></td>
               <td><?= $af["nama"] ?></td>
               <td><?= $af["description"] ?></td>
               <td><?= $af["price"] ?></td>
               <td><a href="#"><?= $af["category"] ?></a></td>
               <tr></tr>
               <?php $nomor++; ?>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>

<!-- Nama   : Agung Septiana -->
<!-- Npm    : 203040102 -->
<!-- shif   : Kamis 08:00 - 09:00 -->