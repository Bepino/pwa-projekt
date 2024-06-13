<?php 
session_start();

include 'connect.php';
define('UPLPATH', 'img/');

if(isset($_POST['delete']) && isset($_POST['id'])){
    $id=$_POST['id'];
    $query = "DELETE FROM vijesti WHERE id=$id ";
    $result = mysqli_query($dbc, $query);
}

if(isset($_POST['update']) && isset($_POST['id'])){
    $picture = $_FILES['pphoto']['name'];
    $title=$_POST['title'];
    $about=$_POST['about'];
    $content=$_POST['content'];
    $category=$_POST['category'];
    if(isset($_POST['archive'])){
    $archive=1;
    }else{
    $archive=0;
    }
    $target_dir = 'img/'.$picture;
    move_uploaded_file($_FILES["pphoto"]["tmp_name"], $target_dir);
    $id=$_POST['id'];
    $query = "UPDATE vijesti SET naslov='$title', sazetak='$about', clanak='$content',
    slika='$picture', kategorija='$category', arhiva='$archive' WHERE id=$id ";
    $result = mysqli_query($dbc, $query);
}

?>
<!DOCTYPE html>
<html>

    <head>
    <title>El Confidencial | Admin</title>
        <meta charset="UTF-8" />
        <link rel="icon"  href="images/icon2.png">
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
                <div><a href="unos.html">Unesi novu stranicu</a></div>
            </nav>
        </header>
        <main>
            <?php
                $opcije = "";
                if(isset($_SESSION['level'])){
                    if($_SESSION['level'] == 'Admin'){
                        $query = "SELECT * FROM vijesti";
                        $result = mysqli_query($dbc, $query);

                        while($row = mysqli_fetch_array($result)) {
                            $opcije = $opcije . '<option value="'. $row['id'] .'">['. $row['id'] .']'.$row['naslov'].'</option>';
                        }
                        echo '<form name="myForm" action="" onsubmit="" method="POST">
                            <select name="clanak_id" id="odabirclanka" class="odabir">
                                <option value="" disabled selected>Odabir clanka</option>
                                '.$opcije.'
                                </select>
                                <input type="submit"></input>
                            </form>';
                        $query = "SELECT * FROM vijesti";
                        $result = mysqli_query($dbc, $query);
                            
                        while($row = mysqli_fetch_array($result)) {
                            if(isset($_POST['clanak_id'])){
                            if($row['id'] == $_POST['clanak_id']) {
                            echo '<form name="'.$row['id'].'" enctype="multipart/form-data" action="" method="POST">
                            <div class="form-item">
                            <label for="title">Naslov vjesti:</label>
                            <div class="form-field">
                            <input type="text" name="title" class="form-field-textual"
                            value="'.$row['naslov'].'">
                            </div>
                            </div>
                            <div class="form-item">
                            <label for="about">Kratki sadržaj vijesti (do 100
                            znakova):</label>
                            <div class="form-field">
                            <textarea name="about" id="" cols="30" rows="10" class="form-
                            field-textual">'.$row['sazetak'].'</textarea>
                            </div>
                            </div>
                            <div class="form-item">
                            <label for="content">Sadržaj vijesti:</label>
                            <div class="form-field">
                            <textarea name="content" id="" cols="30" rows="10" class="form-
                            field-textual">'.$row['clanak'].'</textarea>
                            </div>
                            </div>
                            <div class="form-item">
                            <label for="pphoto">Slika:</label>
                            <div class="form-field">
                            <input type="file" class="input-text" id="pphoto"
                            value="'.$row['slika'].'" name="pphoto"/> <br><img src="' . UPLPATH .
                            $row['slika'] . '" width=100px>
                            <- postojeća slike
                            </div>
                            </div>
                            <div class="form-item">
                            <label for="category">Kategorija vijesti:</label>
                            <div class="form-field">
                            <select name="category" id="" class="form-field-textual"
                            value="'.$row['kategorija'].'">
                            <option value="Spania">Spania</option>
                            <option value="Croazia">Hrvatska</option>
                            <option value="Nautico">Nautico</option>
                            </select>
                            </div>
                            </div>
                            <div class="form-item">
                            <label>Spremiti u arhivu:
                            <div class="form-field">';
                            if($row['arhiva'] == 0) {
                            echo '<input type="checkbox" name="archive" id="archive"/>
                            Arhiviraj?';
                            } else {
                            echo '<input type="checkbox" name="archive" id="archive"
                            checked/> Arhiviraj?';
                            }
                            echo '</div>
                            </label>
                            </div>
                            </div>
                            <div class="form-item">
                            <input type="hidden" name="id" class="form-field-textual"
                            value="'.$row['id'].'">
                            <button type="reset" value="Poništi">Poništi</button>
                            <button type="submit" name="update" value="Prihvati">
                            Izmjeni</button>
                            <button type="submit" name="delete" value="Izbriši">
                            Izbriši</button>
                            </div>
                            </form>'; 
                        }
                        } 
                        }
                    } else {
                        echo '<p>Potreban je ulogirati se sa Admin računom --> <a href="login.php">Login</a></p>';
                    }
                } else {
                    echo '<p>Potreban je ulogirati se --> <a href="login.php">Login</a></p>';
                }
                
            ?> 
        </main>
        <footer>
            <div>Tekstovi d.o.o</div>
            <div><a href="">Kontakt</a></div>
            <div><a href="">Politika Kolačića</a></div>
            <div><a href="">Lorem</a></div>
        </footer>
    </body>
</html>
