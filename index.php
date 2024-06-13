<?php 
    include 'connect.php';
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
            <h2>Home</h2>
            <section>
                
                <?php 
                    $query = "SELECT * FROM vijesti WHERE arhiva = 0 LIMIT 3";
                    $result = mysqli_query($dbc, $query);
                    while($row = mysqli_fetch_array($result)) {
                        echo '<article>
                                <a href="clanak.php?id='. $row['id'] .'">
                                    <img src="img/'. $row['slika']. '" alt="img/'. $row['slika']. '" class="clanak">
                                    <h4 class="clanak">'. $row['naslov']. '</h4>
                                    <p class="datum">'. $row['datum']. '</p>
                                </a>       
                            </article>';
                    }
                ?>
            </section>
            <h2>Spania</h2>
            <section>
                
                <?php 
                    $query = "SELECT * FROM `vijesti` WHERE kategorija = 'Spania' AND arhiva = 0 LIMIT 3;";
                    $result = mysqli_query($dbc, $query);
                    while($row = mysqli_fetch_array($result)) {
                        echo '<article>
                                <a href="clanak.php?id='. $row['id'] .'">
                                    <img src="img/'. $row['slika']. '" alt="img/'. $row['slika']. '" class="clanak">
                                    <h4 class="clanak">'. $row['naslov']. '</h4>
                                    <p class="datum">'. $row['datum']. '</p>
                                </a>       
                            </article>';
                    }
                ?>
            </section>
            <h2>Croazia</h2>
            <section>
                
                <?php 
                    $query = "SELECT * FROM `vijesti` WHERE kategorija = 'Croazia' AND arhiva = 0 LIMIT 3;";
                    $result = mysqli_query($dbc, $query);
                    while($row = mysqli_fetch_array($result)) {
                        echo '<article>
                                <a href="clanak.php?id='. $row['id'] .'">
                                    <img src="img/'. $row['slika']. '" alt="img/'. $row['slika']. '" class="clanak">
                                    <h4 class="clanak">'. $row['naslov']. '</h4>
                                    <p class="datum">'. $row['datum']. '</p>
                                </a>       
                            </article>';
                    }
                ?>
            </section>
            <h2>Nautico</h2>
            <section>
                <?php 
                    $query = "SELECT * FROM `vijesti` WHERE kategorija = 'Nautico' AND arhiva = 0 LIMIT 3;";
                    $result = mysqli_query($dbc, $query);
                    while($row = mysqli_fetch_array($result)) {
                        echo '<article>
                                <a href="clanak.php?id='. $row['id'] .'">
                                    <img src="img/'. $row['slika']. '" alt="img/'. $row['slika']. '" class="clanak">
                                    <h4 class="clanak">'. $row['naslov']. '</h4>
                                    <p class="datum">'. $row['datum']. '</p>
                                </a>       
                            </article>';
                    }
                ?>
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