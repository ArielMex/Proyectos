<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Multiplicar</title>
</head>
<body>

<?php

echo "SEA BIENVENIDO AL SISTEMA DE MULTIPLICACION ";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $numero = isset($_POST["numero"]) ? intval($_POST["numero"]) : 0;

   
    echo "<h2>Usted a deseado la tabla de Multiplicar del numero: $numero</h2>";
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "$numero * $i = $resultado <br>";
    }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="numero">Por favor ingrese un número:</label>
    <input type="number" name="numero" required>
    <button type="submit">Generar Tabla</button>
    <br/>
</form>

</body>
</html>
