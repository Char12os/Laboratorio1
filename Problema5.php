<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="Circunferencia.css">
</head>

<body>

<div class="Formulario">
    <h2>Resultado</h2>

    <?php
    $Nombre = $_REQUEST["nombre"];
    $Nombre = trim($Nombre);
    $Nombre = strtolower($Nombre);
    $Nombre = htmlspecialchars($Nombre);

    echo "<p><strong>El nombre es:</strong> $Nombre</p>";

    $Edad = $_POST["edad"];
    $Edad = trim($Edad);
    $Edad = filter_var($Edad, FILTER_SANITIZE_NUMBER_INT);

    if(!empty($Edad) && $Edad > 18){
        echo "<p>Usted puede votar en las próximas elecciones 2028</p>";
    } else {
        echo "<p>Usted no es mayor de edad</p>";
    }
    ?>
</div>

</body>
</html>