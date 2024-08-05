<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio3</title>
</head>
<body>
    <h2>Área y Volumen </h2>
    <form action="Ejerc3.php" method="post">
    Por favor, ingresa un valor de radio:
    <input type="text" name="radio" id="">
    <br/><br/>
    Ahora por favor, ingresa la altura de tu cilindro:
    <input type="text" name="alturaC" id="">

    <input type="submit" value="Calcular Área y Volumen">
    </form>
</body>
</html>

<?php
if ($_POST) {
    function AreaCircle($radio) {
        $area = 3.1416 * $radio ** 2;
        return $area;
    }

    function Volumen($radio, $altura) {
        $areaBase = AreaCircle($radio);
        $volumen = $areaBase * $altura;
        return $volumen;
    }

    // Cálculo del área del círculo
    $ingresaRadio = $_POST["radio"];
    $AreaDeCirculo = AreaCircle($ingresaRadio);
    print_r("El área total del círculo es de: " . $AreaDeCirculo . "<br/>");

    // Cálculo del volumen del cilindro
    $ingresarAlturaCilindro = $_POST["alturaC"];
    $VolumenCilindro = Volumen($ingresaRadio, $ingresarAlturaCilindro);
    print_r("El volumen total del cilindro es de: " . $VolumenCilindro . "<br/>");
}
?>
