<?php
    include 'connect.php';

    $picture = $_FILES['pphoto']['name'];
    $title=$_POST['title'];
    $about=$_POST['about'];
    $content=$_POST['content'];
    $category=$_POST['category'];
    $date=date('d.m.Y.');
    $target_dir = 'img/'.$picture;   
    
    $query = "SELECT * FROM vijesti WHERE naslov = '".$title."'";
    $result = mysqli_query($dbc, $query) or die('Error querying databese.');

    if ($result->num_rows < 1) {
        if(isset($_POST['archive'])){
            $archive=1;
        }else{
            $archive=0;
        }

        move_uploaded_file($_FILES["pphoto"]["tmp_name"], $target_dir);

        $query = "INSERT INTO vijesti (datum, naslov, sazetak, clanak, slika, kategorija, arhiva ) VALUES ('$date', '$title', '$about', '$content', '$picture', '$category', '$archive')";
        $result = mysqli_query($dbc, $query) or die('Error querying databese.'); 
        $rez = 'Unesi novi clanak';
    } else {
       $rez = 'Clanak vec postoji'; 
    }

    

    mysqli_close($dbc);
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
            <section>
                <a href="unos.html"><?php echo $rez ?></a>
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