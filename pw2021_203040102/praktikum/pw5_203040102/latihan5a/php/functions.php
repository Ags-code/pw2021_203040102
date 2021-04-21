<?php
    function koneksi() {
        $conn = mysqli_connect("localhost", "root", "") or die ("koneksi ke DB gagal");
        mysqli_select_db($conn, "pw_tubes_203040102")or die ("Database salah!");

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
?>