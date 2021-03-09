<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan1c_203040102</title>
    <style>
        .kotak {
            border: black 2px;
        }
        div {
            background-color: salmon;
            display: inline-block;
            width: 50px;
            height: 50px;
            border-radius: 100%;
            border: black solid 3px;
            line-height: 50px;
            text-align: center;
            margin: 0px 5px 10px 0px;
        }
    </style>
</head>
<body>
<?php for ($i = 1; $i <= 3; $i++) : ?>
        <?php for ($j = 1; $j <= $i; $j++) : ?>
            <div><?= $i ?></div>
        <?php endfor; ?>
        <br>
    <?php endfor; ?>
</body>
</html>

<!-- nama   :   Agung Septiana 
     nrp    :   203040102
     shift  :   kamis 08.00 - 09.00
-->