<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php 
$partite = [
    [
        "PrimaSquadra" => "Olimpia Milano",
        "SecondaSquadra" => "Cantù",
        "punteggioPrima" => rand(40, 100),
        "punteggioSeconda" => rand(40, 100),
    ],
    [
        "PrimaSquadra" => "Torino",
        "SecondaSquadra" => "Bari",
        "punteggioPrima" => rand(40, 100),
        "punteggioSeconda" => rand(40, 100),
    ],
    [
        "PrimaSquadra" => "Roma",
        "SecondaSquadra" => "Varese",
        "punteggioPrima" => rand(40, 100),
        "punteggioSeconda" => rand(40, 100),
    ],
];

var_dump($partite);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 1</title>
</head>
<body>

    <div>
    <p>
        <?php
        for ($i = 0; $i < 3; $i++){
            echo $partite[$i]["PrimaSquadra"];
            ?>
        <span> / </span>
        <?php
            echo $partite[$i]["SecondaSquadra"];
            ?>
            <span>: </span>
            <?php
            echo $partite[$i]["punteggioPrima"];
            ?>
            <span>-</span>
            <?php
            echo $partite[$i]["punteggioSeconda"];
            ?>
            <br>
            <?php
            
        }
        ?>   
    </p>
    
    </div>

</body>
</html>