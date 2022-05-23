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
    
    <!-- <?php 
        foreach($db as $key => $value ){
        ?>
        <div class="teachers">
            <?php
            foreach($value as $teacher){
                ?>
                <div class="card">
                <p>Nome: <?php echo $teacher["name"]; ?> </p>
                <p>Cognome: <?php echo $teacher["lastname"]; ?> </p>
                </div>
                <?php
            }
            ?>
        </div>

        <?php
    } 
    ?> -->
    

</body>
</html>