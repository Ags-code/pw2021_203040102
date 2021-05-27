<?php
require '../../php/functions.php';
$keyword = $_GET["keyword"];
$query = "SELECT * FROM gadget
            WHERE
            img LIKE '%$keyword%' OR
            nama LIKE '%$keyword%' OR
            harga LIKE '%$keyword%' OR
            kategori LIKE '%$keyword%' ";

$gadget = query($query);
?>
<?php if(empty($gadget)) : ?>
    <h1>Data tidak ditemukan</h1>
<?php else : ?>
<?php foreach ($gadget as $gdt) : ?>
<div class="cards">
    <div class="card">
        <br>
        <img src="assets/img/<?= $gdt['img']; ?>" alt="" width="100px">
        <br>
        <h2><?= $gdt['nama']?></h2>
        <br>
        <p><?= $gdt['harga']?></p>
        <br>
        <div class="kategori">
            <a href="php/detail.php?id=<?= $gdt['id']; ?>">Detail</a>
        </div>
        <br>
    </div>
</div>
<?php endforeach; ?>
<?php endif; ?>