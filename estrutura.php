<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura</title>
</head>
<body>
    <?php
    echo "<h1>Estruturas de desisão</h1>";
    // if
    // if else
    // if else if
    $idade = 20;
    if($idade >= 18){
        echo "pode dirigir"; /*verdadeiro*/
    }
    else if($idade == 17){
        echo "volte ano que vem";
    }

    else{
        echo "não pode dirigir"; /*falso*/
    }
    ?>
</body>
</html>