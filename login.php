<?php
    session_start();
    if (isset($_POST['ime']) && isset($_POST['pass'])) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "elconfi";
        $_SESSION['ime'] = $_POST['ime'];
        $pass = $_POST['pass'];

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM `korisnik` WHERE ime = '" . $_POST["ime"] . "';";
        $result = $conn->query($sql);

        if ($result->num_rows < 1) {
        } else {
            while($row = $result->fetch_assoc()) {
                if(password_verify($pass, $row["lozinka"])){
                    if($row["razina"] == 1){
                        $_SESSION['level'] = "Admin";
                        $rez = 1;
                    } else {
                        $_SESSION['level'] = "Guest";
                        $rez = 1;
                    }
                };
            }   
        }
        $conn->close();
    }
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
            <?php if (isset($rez)) { 
                if($_SESSION["level"] == "Admin"){ ?>
                    <p>Dobro došli. Vaša razina je administrator</p><br><a href="administracija.php">NEXT</a>
                <?php } else { ?>
                    <p>Dobro došli.</p><br><a href="index.php">NEXT</a>
                <?php }
            } ?>
            <?php if(!isset($rez)) { ?>
                <form action="" method="post">
                <p>Ime: <input type="text" name="ime" /></p>
                <p>Lozinka: <input type="text" name="pass" /></p>
                <p><input type="submit"/></p>
            <?php  } ?>
            <br/>
            <a href="registracija.php">Nemaš račun?</a>
        </main>
        <footer>
            <div>Tekstovi d.o.o</div>
            <div><a href="">Kontakt</a></div>
            <div><a href="">Politika Kolačića</a></div>
            <div><a href="">Lorem</a></div>
        </footer>
    </body>
</html>