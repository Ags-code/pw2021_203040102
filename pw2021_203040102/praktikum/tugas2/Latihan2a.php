<?php
    function gantiStyle($tulisan, $style1, $style2){
        echo "
            <div style='$style1'> 
                <p  style='$style2'> $tulisan </p>
            </div>
        ";
    }
    
    
    echo gantiStyle( 
        "Selamat Datang di Praktikum PW", 
        "border: 1px solid ; box-shadow: 0px 1px 3px 2px; border-radius: 5px 5px 5px 5px;", 
        "font-family: Arial; font-size:28px; color:#8c782d; font-style:italic; font-weight: bold;"
    );

?>

<!-- Nama   :   Agung Septiana
     Kelas  :   Informatika - C
     Npm    :   203040102
     Shif   :   Kamis 08.00 - 09.00
 -->

