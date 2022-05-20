<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
 che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
 Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php
$name = $_GET["name"];
$email = $_GET["email"];
$age = $_GET["age"];

var_dump($name);
var_dump($email);
var_dump($age);

if(strlen($name) > 3 &&  strpos($email, "@") && strpos($email, ".") && filter_input(INPUT_GET, "age", FILTER_VALIDATE_INT)){
    $msg = "Accesso riuscito";
} else {
    $msg = "Accesso negato";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack2</title>
</head>
<body>

    <p><?php echo $msg;?></p>
    
</body>
</html>