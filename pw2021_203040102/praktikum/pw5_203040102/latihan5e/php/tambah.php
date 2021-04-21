<?php
require 'functions.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
            alert('Data Berhasil ditambahkan!');
            document.location.href = 'admin.php';
        </script>";
    } else {
        echo "<script>
            alert('Data Berhasil ditambahkan!');
            document.location.href = 'admin.php';
        </script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah.php</title>
    <link rel="stylesheet" href="../CSS/style4.css">
</head>
<body>
<section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>  
        <div class="box">
            <div class="container">
                <div class="form">
                    <h2>Tambah Data</h2>
                    <form action="" method="POST">
                        <table>
                            <tr>
                                <td>
                                    <label for="img">Gambar</label>
                                </td>
                                <td class="inputBox">
                                    <input type="text" name="img">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="nama">Nama</label>
                                </td>
                                <td class="inputBox">
                                    <input type="text" name="nama">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="deskripsi">Spesifikasi</label>
                                </td>
                                <td class="inputBox">
                                    <input type="text" name="deskripsi">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="harga">Harga</label>
                                </td>
                                <td class="inputBox">
                                    <input type="text" name="harga">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="kategori">Beli</label>
                                </td>
                                <td class="inputBox">
                                    <input type="text" name="kategori">
                                </td>
                            </tr>
                        </table>
                        <div class="inputBox">
                            <button type="submit" name="tambah">Tambah Data</button>
                            <button type="submit">
                                <a href="admin.php" style="text-decoration:none; color: #666;">Kembali</a>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>