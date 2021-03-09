<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2c_203040102</title>

    <style>
        .bola {
            width: 50px;
            height: 50px;
            display: table-cell;
            text-align: center;
            vertical-align: middle;
            border: 1px solid black;
            border-radius: 50%;
            background: salmon;
        }
    </style>
</head>
<body>

        <?php tumpukanBola(5) ?>
        <?php function tumpukanBola($tumpukan){
            for ($i = 1; $i <= $tumpukan; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                echo "<div class='bola'>$i</div>";

                }
            
                echo "<br>";
            } 
        }
?>
    
</body>
</html>

<!-- nama   :   Agung Septiana 
     nrp    :   203040102
     shift  :   kamis 08.00 - 09.00
-->
