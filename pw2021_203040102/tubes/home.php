<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <section>
            <header id="header">
            <a href="#agung" class="logo">Agung Septiana</a>
                <ul>
                    <li><a href="#home" class="active">Home</a></li>
                    <li><a href="php/tugas.php">Tugas</a></li>
                    <li><a href="php/tugas.php">Contact</a></li>
                </ul>
            </header>
            <img src="assets/img/stars.png" id="stars">
            <img src="assets/img/moon.png" id="moon">
            <img src="assets/img/mountains_behind.png" id="mountains_behind">
            <h2 id="text">Agung <span>Septiana</span></h2>
            <a href="#" id="btn">Play</a>
            <img src="assets/img/mountains_front.png" id="mountains_front">
    </section>
    <!-- <div class="sec">
        <h2>Tugas</h2>
        <div class="content">
            <div class="con">
                <h4>Kuliah</h4>
                <p>pertemuan10</p>
                <p><a href="../kuliah/pertemuan10/latihan1.php">Latihan 1</a></p>
                <p><a href="../kuliah/pertemuan10/latihan2.php">Latihan 1</a></p>
                <p><a href="../kuliah/pertemuan10/latihan3.php">Latihan 1</a></p>
                <br>
                <p><a href="../kuliah/pertemuan11/php/index.php">Pertemuan11</a></p>
                <br>
                <p><a href="../kuliah/pertemuan12/php/index.php">Pertemuan12</a></p>
                <br>
                <p><a href="../kuliah/pertemuan13/php/index.php">Pertemuan13</a></p>
            </div>
        </div>
        <div class="content">
            <div class="con">
                <h4>Kuliah</h4>
                <p>pertemuan10</p>
                <p><a href="../kuliah/pertemuan10/latihan1.php">Latihan 1</a></p>
                <p><a href="../kuliah/pertemuan10/latihan2.php">Latihan 1</a></p>
                <p><a href="../kuliah/pertemuan10/latihan3.php">Latihan 1</a></p>
                <br>
                <p><a href="../kuliah/pertemuan11/php/index.php">Pertemuan11</a></p>
                <br>
                <p><a href="../kuliah/pertemuan12/php/index.php">Pertemuan12</a></p>
                <br>
                <p><a href="../kuliah/pertemuan13/php/index.php">Pertemuan13</a></p>
            </div>
        </div>
    </div> -->

    <script src="assets/js/anime.min.js"></script>
    <script>
        var animation = anime.timeline({
            autoplay: false
        });

        animation
        .add({
            targets:'#btn',
            top:'15000px',
            duration: 500,
            easing: 'easeInOutSine'
        })

        .add({
            targets:'#stars',
            top:'0px',
            duration: 1000,
            easing: 'easeInOutSine'
        })

        .add({
            targets:'#mountains_behind',
            bottom:'0px',
            duration: 1000,
            easing: 'easeInOutSine'
        })
        

        .add({
            targets:'#moon',
            top:'0px',
            duration: 1000,
            easing: 'easeInOutBack'
        })
        .add({
            targets:'#mountains_front',
            bottom:'0px',
            duration: 1000,
            easing: 'easeInOutSine'
        })
        .add({
            targets:'#text',
            marginRight: 0,
            duration: 1000,
            easing: 'easeInOutBack'
        })

        .add({
            targets:'#header',
            top:'0px',
            duration: 1000,
            easing: 'easeInOutBack'
        })
        
        animation
        .add({
            targets:'#btn',
            top:'50%',
            duration: 1000,
            easing: 'easeInOutBack'
        })


        document.querySelector('#btn').onclick = animation.play;
    </script>
    <script src="assets/js/script.js"></script>
</body>
</html>