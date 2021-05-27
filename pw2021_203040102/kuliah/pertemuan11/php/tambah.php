<?php
require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
                alert('Data Berhasil ditambahkan!');
                document.location.href = 'latihan3.php';
          </script>";
  } else {
    echo "<script>
                alert('Data Gagal ditambahkan!');
                document.location.href = 'latihan3.php';
          </script>";
  }
}
?>


<h3>Form Tambah Data Action Figure</h3>
<form action="" method="POST">
  <div class="container">
    <ul>
      <li>
        <label for="gambar">Gambar </label><br>
        <input type="file" name="gambar" id="gambar" required><br><br>
      </li>
      <li>
        <label for="nama">Nama </label><br>
        <input type="text" name="nama" id="nama" required><br><br>
      </li>
      <li>
        <label for="harga">Harga </label><br>
        <input type="text" name="harga" id="harga" required><br><br>
      </li>
      <li>
      <label for="harga">Deskripsi </label><br>
        <input type="text" name="deskripsi" id="deskripsi" required><br><br>
      </li>
      <br>
      <button type="submit" name="tambah">Tambah Data!</button>
      <button type="submit">
        <a href="latihan3.php">Kembali</a>
      </button>
    </ul>
  </div>
</form>