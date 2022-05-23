<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->
<?php
$text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum esse consectetur veniam harum odio quo! Eveniet saepe eaque voluptas tempore officia pariatur, magni qui distinctio, fuga quae asperiores vel cum vitae temporibus placeat id similique provident eos repellat sunt iusto eligendi! Magnam accusamus necessitatibus delectus! Temporibus similique natus, sequi enim corrupti itaque fuga! Modi debitis, cupiditate quia reiciendis ex explicabo! Quod nihil praesentium quam tempore neque beatae quos. Odio accusantium qui corrupti earum dicta rem? Explicabo officia cum cumque inventore voluptate veniam quisquam labore. Odit quaerat maxime excepturi commodi dolores quam ab ipsum? Quos fugiat a modi ipsam laudantium aut!";

$strings = [];

$strings = explode('.', $text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack5</title>
</head>
<body>
    <h1>Paragrafi</h1>

    <?php
    foreach($strings as $string){
        
        ?>
        <h2>paragrafo</h2>
        <p>
            <?php echo $string;?>
        </p>
        <?php
    }
    ?>

</body>
</html>