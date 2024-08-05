<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="Ejerc4.php" method="post">
        <label for="Bienvendia">"¡SEA BIENVENIDO AL SISTEMA DE DETECCION DE CARRERA DE LA UNIVERSIDAD TECNOLOGICA DE CANCUN!"

            <br />
            <br />

            <label for="Paso">LISTAS DE CARRERAS AQUI:
                <br />
                <br />
                <label for="ListCarr">|Medicina|
                    <label for="ListCarr">|Desarrollo|
                        <label for="ListCarr">|Psicologia|
                            <label for="ListCarr">|Telecomunicaciones|
                                <label for="Listcarr">|Administracion|

                                    <br />
                                    <br />

                                    <label for="PreguntarUsuario"> "Que tal, ¿cual es tu carrera? Escribalo en el recuadro de alado:"
                                        <input type="text" name="txtcarrera" id="">
                                        <input type="submit" value="Encontrar">

                                        <br />
                                        <br />
    </form>


    <?php

    $mensaje = "";
    function edificioAsignado($carrera, $ListCarr)
    {
        foreach ($ListCarr as $carrera) {
            if (isset($_POST['txtcarrera'])) {
                $carrera = $_POST['txtcarrera'];
                switch ($carrera) {
                    case 'Medicina':
                        return "Edificio A";
                    case 'Desarrollo';
                        return "Edificio B";
                    case 'Psicologia';
                        return "Edificio C";
                    case 'Telecomunicaciones':
                        return "Edificio B";
                    case 'Administracion':
                        return "Edificio A";
                    default:
                        return "Consulta en dirección para obtener mejor informacion";
                }
            }
        }
    }

    if ($_POST) {
        $ListCarr = array('medicina', 'desarrollo', 'psicología', 'telecomunicaciones', 'administración');
        $carrera = $_POST['txtcarrera'];
        $edificio = edificioAsignado($carrera, $ListCarr);
        echo "Tu carrera es: $carrera y tu edificio es: $edificio <br>";
    }

    ?>
    </form>

</body>

</html>