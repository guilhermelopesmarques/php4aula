<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula03</title>
</head>
<body>
    <?php
    // operadores relacionais
    echo (20 > 30) . " false<br>"; // maior
    echo (20 < 30) . " true<br>"; // menor
    echo (10 == 10) . "true<br>"; // igualdade
    echo (10 >= 10) . "true<br>"; // maior ou igual
    echo (10 <= 10) . "true<br>"; // menor ou igual

    // operadores logicos
    echo (10 == 10 && 10 > 5) . "true<br>"; // operador E
    echo (10 == 10 || 10 > 5) . "true<br>"; // operador OU
    echo (false) . "true<br>"; // operador não
    ?>
</body>
</html>