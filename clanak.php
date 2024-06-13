<?php 
    include 'connect.php';
    define('UPLPATH', 'img/');
    $id = $_GET['id'];

    $query = "SELECT * FROM `vijesti` WHERE id=".$id." ";
    $result = mysqli_query($dbc, $query);
    $row = 0;
    while($rez = mysqli_fetch_array($result)){
        $row = $rez;
    }
    session_start();
?>

<!DOCTYPE html>
<html lang="hr">
    <head>
        <title>El Confidencial</title>
        <meta charset="UTF-8">
        <link rel="icon"  href="images/icon.png">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <h1>El Confidencial</h1>
            <h3>El diario de los lectore inflyentes</h3>
            <nav>
                <div><a href="index.php">Home</a></div>
                <div><a href="kategorija.php?kat='Spania'">Spania</a></div>
                <div><a href="kategorija.php?kat='Croazia'">Hrvatska</a></div>
                <div><a href="kategorija.php?kat='Nautico'">Nautico</a></div>
                <div><a href="administracija.php">Administraciones</a></div>
            </nav>
        </header>
        <main>
            <section class="main">
                <div class="row">
                    <h2 class="category"><?php
                    echo "<span>".$row['kategorija']."</span>";
                    ?></h2>
                    <h1 class="title"><?php
                    echo $row['naslov'];
                    ?></h1>
                    <section class="about">
                    <p>
                    <?php
                    echo "<i>".$row['sazetak']."</i>";
                    ?>
                    </p>
                </div>
                </section>
                <section class="slika">
                    <?php
                    echo '<img class="slika" src="' . UPLPATH . $row['slika'] . '">';
                    ?>
                </section>
                
                
                <section class="sadrzaj">
                <p>OBJAVLJENO: <?php
                echo "<span>".$row['datum']."</span>";
                ?>
                </p>
                <hr>
                <p>
                <?php
                echo $row['clanak'];
                ?>
                </p>
                </section>
            </section>
        </main>
        <footer>
            <div>Tekstovi d.o.o</div>
            <div><a href="">Kontakt</a></div>
            <div><a href="">Politika Kolačića</a></div>
            <div><a href="">Lorem</a></div>
        </footer>
    </body>
</html>