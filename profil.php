
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Zadatak 2 profil</h1>
    <?php
    session_start();
    if(isset($_SESSION['ime']) and isset($_SESSION['prezime']) and isset($_SESSION['datum'])){
        echo "Ime: ".$_SESSION['ime']."<br>";
        echo "Prezime: ".$_SESSION['prezime']."<br>";
        echo "Datum: ".$_SESSION['datum']."<br>";
        echo " <a href='odjava.php?odjava'>Odjava</a><br>";
    }
    else{
        echo "Sesija nije kreirana!<br>";
        echo "<a href='index.php'>Pocetna</a>";
    }
    ?>
</body>
</html>