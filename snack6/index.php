<!-- Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->
<?php
 $db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

var_dump($db["teachers"]["name"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack6</title>
    <style>
        .teachers{
            background-color: grey;
        }
        .pms{
            background-color: green;
        }
    </style>
</head>
<body>
    
    <?php foreach($db as $key => $value ){
        ?>
        <div class="teachers">
            <div class="card">
                <p>Nome: <?php echo $value; ?> </p>
                <p>Cognome: <?php echo $value["lastname"]; ?> </p>
            </div>
        </div>
        <?php

    } ?>
</body>
</html>