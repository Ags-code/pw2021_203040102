<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas1_203040102</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            display: inline-block;
            border: 2px solid black;
        }

        .salmon {
            background-color: salmon;
        }

        .lightblue {
            background-color: lightblue;
        }
    </style>
</head>
<body>
<?php for ($kolom = 1; $kolom <= 6; $kolom++) :
        for ($baris = 1; $baris <= 6; $baris++) :

            if ($kolom % 2 == !0) :
                if ($baris % 2 == !0) : ?>
                    <div class="kotak lightblue"></div>
                <?php else : ?>
                    <div class="kotak salmon"></div>
                <?php endif; ?>

                <?php else :
                if ($baris % 2 == !0) : ?>
                    <div class="kotak salmon"></div>
                <?php else : ?>
                    <div class="kotak lightblue"></div>
                <?php endif; ?>
            <?php endif; ?>

        <?php endfor; ?>
        <br>
    <?php endfor; ?>
</body>
</html>
<!-- nama   :   Agung Septiana 
     nrp    :   203040102
     shift  :   kamis 08.00 - 09.00
-->