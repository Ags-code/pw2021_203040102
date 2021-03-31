<?php

    // Nama : Agung Septiana
    // Npm  : 203040102
    // Shift : Kamis 08:00 - 09:00

    
    // melakukan koneksi ke database
    $conn = mysqli_connect("localhost", "root", "");
    // Memilih database
    mysqli_select_db($conn, "pw_tubes_203040102");
    // Melakukan query dari database
    $result = mysqli_query($conn, "SELECT * FROM gadget");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan4a_203040102</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>

<h1>Daftar Gadget</h1>
<?php $i = 1;?>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Spesifikasi</th>
            <th>Harga</th>
            <th>kategori</th>
        </tr>
    <?php $i = 1;?>
    <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
        <tr>
            <td><?= $i; ?></td>

            <td>
                <a href="">ubah</a> 
                <a href="">hapus</a>
            </td>
            <td><img src="assets/img/<?= $row["img"]; ?>" width="60px"></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["deskripsi"]; ?></td>
            <td><?= $row["harga"]; ?></td>
            <td><div class="kategori"><?= $row["kategori"]; ?></div></td>
        </tr>
    <?php $i++; ?>
    <?php endwhile; ?>
    </table>
</body>
</html>