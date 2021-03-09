<?php
    $jawabanIsset = "Isset adalah = untuk menentukan apakah suatu variabel sudah terdevinisi nilainya atau belum. Jika variabel terdefinisi maka akan menampilkan True sedangkan variabel kosong atau tidak terdefinisi maka akan menampilkan False.<br><br>";
    $jawabanEmpty = "Empty adalah = untuk menentukan apakah suatu variabel itu kosong (tidak terdefinisi) atau belum. Jika variabel terdefinisi maka akan menampilkan False sedangkan variabel kosong (tidak terdefinisi) akan menampilkan True.";
    
    function soal($style){
        echo $GLOBALS['jawabanIsset'];
        echo $GLOBALS['jawabanEmpty'];
    }
    
    
    echo soal( 
        "font-family: Arial; font-size:28px; color:#8c782d; font-style:italic; font-weight: bold;"
    );

?>
<!-- Nama   :   Agung Septiana
     Kelas  :   Informatika - C
     Npm    :   203040102
     Shif   :   Kamis 08.00 - 09.00
 -->