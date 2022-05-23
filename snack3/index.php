<!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post. -->

<?php
$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack3</title>

    <style>
        .container{
            display: flex;
            column-gap: 1rem;
            flex-wrap: wrap;
            width: 1200px;
            margin: 0 auto;
        }
        .card{
            width: calc(100% / 3 - 1rem);
            border: 1px solid blue;
        }
    </style>
</head>
<body>
    <h1>Posts</h1>

    
    <div class="container">
        <?php
            foreach($posts as $key => $value){
                ?>
                <div class="card">
                <?php
                echo $key;
                ?>
                    <?php
                foreach($value as $article){
                    ?>
                    <p>
                    <?php
                    echo $article["title"];
                    ?>
                    </p>
                    <p>
                        <?php echo $article["author"];?>
                    </p>
                    <p>
                        <?php echo $article["text"];?>
                    </p>
                    <?php
                }
                ?>
                </div>
                <?php
            }
        ?>
    </div>

</body>
</html>