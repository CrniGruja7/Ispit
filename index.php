<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak3</title>
</head>
<body>
</body>
<?php
$pozadinska_boja = $_COOKIE['lista1'];
$boja_slova = $_COOKIE['lista2'];
if($pozadinska_boja != "0" && $boja_slova != "0"){
echo "<body style='background-color: $pozadinska_boja'><div style='color: $boja_slova'>
        <h1>Zadatak 2 - Pocetna</h1>
        <h4>Naslov paragrafa</h4>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum laboriosam dolor, mollitia sunt, alias sint voluptas, tempore est harum odit assumenda nihil vitae quidem maiores! Provident, a cupiditate? Sit, doloremque.
        <br>
    <a href='podesavanja.php'>Podesavanja</a>
    </div></body>";
}
else{
    setcookie("lista1",$pozadinska_boja,time()-1,"/");
    setcookie("lista2",$boja_slova,time()-1,"/");
    echo "<body style='background-color: white'><div style='color: black'>
        <h1>Zadatak 2 - Pocetna</h1>
        <h4>Naslov paragrafa</h4>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum laboriosam dolor, mollitia sunt, alias sint voluptas, tempore est harum odit assumenda nihil vitae quidem maiores! Provident, a cupiditate? Sit, doloremque.
        <br>
    <a href='podesavanja.php'>Podesavanja</a>
    </div></body>";
}
?>
</html>