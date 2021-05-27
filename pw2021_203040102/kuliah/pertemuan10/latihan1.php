<?php
/*
Agung Septiana
203040102
*/
// koneksi ke DB & Pilih Database
$conn = mysqli_connect("localhost", "root", "", "pw_203040102");

// Query isi tabel figure
$result = mysqli_query($conn, "SELECT * FROM figure");

// ubah data ke dalam array
// $row = mysqli_fetch_row($result) // array numerik
// $row = mysqli_fetch_assoc($result) // array associative
// $row = mysqli_fetch_array($result) // keduanya
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}
$figure = $rows;
?>
<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
</head>

<body>

    <h1>Action Figure</h1>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Deskripsi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($figure as $f) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="">ubah</a>
                    <a href="">hapus</a>
                </td>
                <td><img src="img/<?= $f["gambar"]; ?>" width="70px"></td>
                <td><?= $f["nama"]; ?></td>
                <td><?= $f["harga"]; ?></td>
                <td><?= $f["deskripsi"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>

    </table>


</body>

</html>