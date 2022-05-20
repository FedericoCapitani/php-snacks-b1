<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome,
Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->
<?php
$classe = [
    [
        "nome" => "Marco",
        "cognome" => "Rossi",
        "voti" => [6, 7, 8, 7 ,8 ,7 ,9, 6],
    ],
    [
        "nome" => "Paola",
        "cognome" => "Ricci",
        "voti" => [6, 7, 8, 7 ,8 ,7 ,9, 6],
    ],
    [
        "nome" => "Andrea",
        "cognome" => "Verdi",
        "voti" => [6, 7, 8, 7 ,8 ,7 ,9, 6],
    ],
    [
        "nome" => "Luigi",
        "cognome" => "Monti",
        "voti" => [6, 7, 8, 7 ,8 ,7 ,9, 6],
    ],
    [
        "nome" => "Sara",
        "cognome" => "Franchi",
        "voti" => [6, 7, 8, 7 ,8 ,7 ,9, 6],
    ],
    [
        "nome" => "Luca",
        "cognome" => "Abete",
        "voti" => [6, 7, 8, 7 ,8 ,7 ,9, 6],
    ]
];

var_dump(count($classe));
for($i = 0; $i < count($classe); $i++){
    $sum = 0;
    for($j = 0; $j < count($classe[$i]["voti"]); $j++){
        $sum = $sum + $classe[$i]["voti"][$j];
    }
    $media = $sum / count($classe[$i]["voti"]);
    $classe["media_voti"] = $media;
}
// var_dump($classe);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack7</title>
</head>
<body>
    <div>
        <span>Nome: </span>
        <?php
        for($i = 0; $i < count($classe); $i++){
            echo $classe[$i]["nome"];
            ?>
        <span> Cognome: </span>
        <?php
            echo $classe[$i]["cognome"];
            ?>
        <span> Media voti: </span>
        <?php
            echo $classe[$i]["media_voti"];
            ?>
            <br>
        <?php 
        }
        ?>
    </div>
</body>
</html>