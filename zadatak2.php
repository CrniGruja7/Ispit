<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Unesite datum da bi ste izabrali rok vazenja licne karte</h1>
    <form action="zadatak2.php" method="post">
    <input type="date" name="datum" id="datum"> <button name="dugme">Prikazi</button>
    </form>
    <br>
</body>
<?php
   if(isset($_POST['dugme'])){
        $datum = $_POST['datum'];       
        $datumUsek = strtotime($datum);
        $trenutnoVreme = time();
        $protekloVreme = $trenutnoVreme - $datumUsek;
        $brGodina = round($protekloVreme / 31556926);
        $lKarta5 = date("d.m.Y", strtotime("+5 years"));
        $lKarta10 = date("d.m.Y", strtotime("+10 years"));

        if($brGodina >= 15 && $brGodina <= 18){
            echo "Kao datum ste izabrali: $datum. Broj godina: $brGodina.<br>";
            echo "Imate od 15 do 18 godina. Rok trajanja licne karte je do: $lKarta5<br>";
        }
        else if($brGodina > 0 && $brGodina < 15){
            echo "Kao datum ste izabrali: $datum. Broj godina: $brGodina.<br>";
            echo "Nemate jos pravo na vadjenje licne karte<br>";
        }
        else if($brGodina > 18){
            echo "Kao datum ste izabrali: $datum. Broj godina: $brGodina.<br>";
            echo "Imate vise od 18 godina. Rok trajanja licne karte je do: $lKarta10<br>";
        }
        else if($brGodina < 0){
            echo "Niste rodjeni, ponovo unesite datum!<br>";
        }
   }
?>
</html>