<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->
<?php
$numeri_random = [];
$numeri_random_unici = [];

while (count($numeri_random_unici) < 15){
    $new_num = rand(1,40);
    array_push($numeri_random, $new_num);
    $numeri_random_unici = array_values(array_unique($numeri_random));
}
var_dump($numeri_random);
var_dump($numeri_random_unici);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array num casuali</title>
</head>
<body>
    <p>
         
        <?php
        for($i = 0; $i < count($numeri_random_unici); $i++){
            ?>
            <span>Numero: </span>
            <?php
            echo $numeri_random_unici[$i];
        }
        ?>
    </p>
</body>
</html>