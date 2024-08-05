<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
function esPrimo($numero) {
    if ($numero < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }

    return true;
}

$numeros = [7, 63, 13, 25, 11];

echo "<h2>Verificación de números primos</h2>";

foreach ($numeros as $numero) {
    if (esPrimo($numero)) {
        echo "$numero es un número primo.<br>";
    } else {
        echo "$numero no es un número primo.<br>";
    }
}

?>
    
</body>
</html>

