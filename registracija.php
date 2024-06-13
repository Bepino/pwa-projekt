<?php
    session_start();
    if(isset($_POST['unesi'])){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "elconfi";
    
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
        $sql = "SELECT * FROM `korisnik` WHERE ime = '" . $_POST["ime"] . "';";
        $result = $conn->query($sql);
    
        if ($result->num_rows == 0) {
            $sql = "INSERT INTO korisnik (ime, prezime, lozinka) VALUES ('". $_POST["ime"] ."', '". $_POST["prezime"] ."', '" . password_hash($_POST["lozinka"], CRYPT_BLOWFISH) . "')";
            $result = $conn->query($sql);
            echo "Registracija je uspješna";
            $_SESSION['level'] = 'Gost';
        } else {
            echo "Korisničko ime se već koristi";
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
            <form method="POST" action="index.html">
            <label for="ime">Ime</label>
            <br />
            <input name="ime" type="text" required/>
            <br />
            <label for="prezime">Prezime</label>
            <br />
            <input name="prezime" type="text" required/>
            <br />
            <label for="lozinka">Lozinka</label>
            <br />
            <input name="lozinka" type="password" required/>
            <br />
            <button type="submit" name="unesi" value="Unesi">Registriraj</button>
            <br />
            <a href="login.php"> Već imaš račun?</a>
        </form>
        </main>
        <footer>
            <div>Tekstovi d.o.o</div>
            <div><a href="">Kontakt</a></div>
            <div><a href="">Politika Kolačića</a></div>
            <div><a href="">Lorem</a></div>
        </footer>
    </body>
</html>