<?php
    function koneksi() {
        $conn = mysqli_connect("localhost", "root", "") or die ("koneksi ke DB gagal");
        mysqli_select_db($conn, "Tubes_203040102")or die ("Database salah!");

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
        
        return mysqli_affected_rows($conn);
    }

    function hapus($id) {
        $conn = koneksi();
        mysqli_query($conn, "DELETE FROM gadget WHERE id = $id");
        return mysqli_affected_rows($conn);
    }

    function ubah($data) {
        $conn = koneksi();
        $id = htmlspecialchars($data['id']);
        $img = htmlspecialchars($data['img']);
        $nama = htmlspecialchars($data['nama']);
        $deskripsi = htmlspecialchars($data['deskripsi']);
        $harga = htmlspecialchars($data['harga']);
        $kategori = htmlspecialchars($data['kategori']);

        $query = "UPDATE gadget
                SET
                img = '$img',
                nama = '$nama',
                deskripsi = '$deskripsi',
                harga = '$harga',
                kategori = '$kategori'
                WHERE id = '$id'
                ";
        mysqli_query($conn, $query);
        
        return mysqli_affected_rows($conn);
    }

    function registrasi($data) {
        $conn = koneksi();
        $username = htmlspecialchars($data['username']);
        $password = htmlspecialchars($data['password']);

        $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
        if(mysqli_fetch_assoc($result)) {
            echo "<script>
                alert('Username sudah digunakan');
            </script>";
            return false;
        }

        $password = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO user VALUES
                ('', '$username', '$password')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function cari($keyword) {
        $query = "SELECT * FROM gadget WHERE
                img LIKE '%$keyword%' OR
                nama LIKE '%$keyword%' OR
                deskripsi LIKE '%$keyword%' OR
                harga LIKE '%$keyword%' OR
                kategori LIKE '%$keyword%' ";
        return query($query);
    }
?>