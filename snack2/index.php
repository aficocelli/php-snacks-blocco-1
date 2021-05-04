
<?php 

//Passare come parametri GET name, mail e age e
//verificare (cercando i metodi che non
//conosciamo nella documentazione) che:
//1. name sia più lungo di 3 caratteri,
//2. mail contenga un punto e una chiocciola
//3. age sia un numero.
//Se tutto è ok stampare “Accesso riuscito”, altrimenti
//“Accesso negato”

$name = $_GET['name'];

$mail = $_GET['mail'];

$age = $_GET['age'];

$login = false;

if(count($name) > 3){

    echo "ok";

}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> ciao <?php $name ?> </h1>
</body>
</html>