<?php
    function koneksi() {
        $conn = mysqli_connect("localhost", "root", "") or die ("koneksi ke DB gagal");
        mysqli_select_db($conn, "tubes_203040102")or die ("Database salah!");

        return $conn;
    }

    function query($sql) {
        $conn = koneksi();
        $result = mysqli_query($conn, "$sql");
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
    
    return $rows;
    }

    function tambah($data) {
        $conn = koneksi();

        $img = htmlspecialchars($data['img']);
        $nama = htmlspecialchars($data['nama']);
        $deskripsi = htmlspecialchars($data['deskripsi']);
        $harga = htmlspecialchars($data['harga']);
        $kategori = htmlspecialchars($data['kategori']);

        $query = "INSERT INTO gadget
                        VALUES
                        ('', '$img', '$nama', '$deskripsi', '$harga', '$kategori')";

        mysqli_query($conn, $query);

        mysqli_affected_rows($conn);
    }

    function hapus($id) {
        $conn = koneksi();
        mysqli_query($conn, "DELETE FROM gadget WHERE id = $id");
        return mysqli_affected_rows($conn);
    }
?>