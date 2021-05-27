<?php
function koneksi()
{
  $conn = mysqli_connect("localhost", "root", "");
  mysqli_select_db($conn, "pw_203040102");

  return $conn;
}

function query($sql)
{
  $conn = koneksi();
  $result = mysqli_query($conn, "$sql");

  // jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $gambar = htmlspecialchars($data['gambar']);
  $nama = htmlspecialchars($data['nama']);
  $harga = htmlspecialchars($data['harga']);
  $deskripsi = htmlspecialchars($data['deskripsi']);

  $query = "INSERT INTO figure
                    VALUES
                    ('','$nama','$harga','$gambar',$deskripsi)";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}
