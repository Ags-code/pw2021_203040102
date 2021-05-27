<?php
require '../../php/functions.php';

$keyword = $_GET['keyword'];
$query = "SELECT * FROM gadget WHERE
                img LIKE '%$keyword%' OR
                nama LIKE '%$keyword%' OR
                deskripsi LIKE '%$keyword%' OR
                harga LIKE '%$keyword%' OR
                kategori LIKE '%$keyword%' ";

$gadget = query($query);
?>
    <table border="1" cellpadding="13" cellspacing="0">
        <tr>
            <th>No</th>
            <th width="120px">Opsi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th width="400px">Spesifikasi</th>
            <th>harga</th>
            <th>Beli</th>
        </tr>
        <?php if(empty($gadget)) : ?>
            <tr>
                <td colspan="7">
                    <h1>Data tidak ditemukan</h1>
                </td>
            </tr>
        <?php else : ?>
            <?php $i = 1; ?>
            <?php foreach ($gadget as $gdt) : ?>
                <tr class="cvr">
                    <td><?= $i;?></td>
                    <td class="btn">
                        <a href="ubah.php?id=<?= $gdt['id']; ?>"><button>Ubah</button></a>
                        <a href="hapus.php?id=<?= $gdt['id']; ?>" onclick="return confirm('Yakin mau dihapus?')"><button>Hapus</button></a>
                    </td>
                    <td><img src="../assets/img/<?= $gdt['img']; ?>" alt="" width="100px"></td>
                    <td><?= $gdt['nama']?></td>
                    <td class="deskripsi"><?= $gdt['deskripsi']?></td>
                    <td><?= $gdt['harga']?></td>
                    <td><div class="kategori"><a href="#"><?= $gdt['kategori']?></a></div></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
            <?php endif; ?>
        </table>