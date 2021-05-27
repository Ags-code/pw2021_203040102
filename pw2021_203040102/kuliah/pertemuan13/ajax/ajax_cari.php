<?php
require "../php/functions.php";
$fr = cari($_GET['keyword']);
?>

<table border="1" cellpadding="10" cellspacing="0">

  <tr>
    <th>#</th>
    <th>Gambar</th>
    <th>Nama</th>
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
      <td><img src="img/<?= $f["gambar"]; ?>"></td>
      <td><?= $f["nama"]; ?></td>
      <td><?= $f["harga"]; ?></td>
      <td><?= $f["deskripsi"]; ?></td>
      <td><a href="detail.php?id=<?= $f['id'] ?>">Lihat Detail</span></a></td>
    </tr>
    <?php $i++; ?>
  <?php endforeach; ?>

</table>