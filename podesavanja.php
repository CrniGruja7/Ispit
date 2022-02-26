<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Zadatak 2 - Podesavanja</h1>
<form action="" method="post">
        <select name="lista1" id="lista1">
            <option value="0">--Izaberite pozadinsku boju--</option>
            <option value="green">Zelena</option>
            <option value="red">Crvena</option>
            <option value="blue">Plava</option>
            <option value="yellow">Zuta</option>
        </select>
        <select name="lista2" id="lista2">
            <option value="0">--Izaberite boju slova--</option>
            <option value="green">Zelena</option>
            <option value="red">Crvena</option>
            <option value="blue">Plava</option>
            <option value="yellow">Zuta</option>
        </select>
        <button name="dugme" id="dugme" type="submit">Snimi podatke</button>
    </form>
    <hr>
    <a href="index.php">Pocetna</a>
</body>
<?php
    if(isset($_POST['dugme'])){
        $lista1 = $_POST['lista1'];
        $lista2 = $_POST['lista2'];
        setcookie("lista1",$lista1,time()+60,"/");
        setcookie("lista2",$lista2,time()+60,"/");
    }
?>
</html>