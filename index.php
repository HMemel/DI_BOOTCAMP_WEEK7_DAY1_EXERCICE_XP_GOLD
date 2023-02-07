<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> EXERCICE XP NINJA </title>
</head>

<body>
    <!-- Exercice 1 : Length of the String -->
    <?php
    $str = "PHP";
    echo "Your String is : " . $str;
    echo " By using 'strlen()' function:" . strlen($str);
    ?> <br>

    <!--Exercice 2: Count the Words in the String  -->
    <?php $variable = "Hello world";
    echo str_word_count($variable);   ?> <br>

    <!-- Exercice 3 : Convert to Uppercase -->
    <?php $variable = "Hello WORLD"; echo strtoupper($variable); ?>
</body>

</html>