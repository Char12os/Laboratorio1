<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="Problema6.css">
</head>
<body>
<div class="card">
    <h1>Calculadora</h1>
    <p>Operaciones básicas</p>
 <!-- Formulario que envia los datos -->
    <form method="POST">
<!-- Value es para que se mantenga en el input despues de que lo calcule  -->
        <input type="number" name="num1" step="any" placeholder="Primer número" required

        value="<?php echo isset($_POST['num1']) ? $_POST['num1'] : ''; ?>">

        <input type="number" name="num2" step="any" placeholder="Segundo número" required
        
        value="<?php echo isset($_POST['num2']) ? $_POST['num2'] : ''; ?>">

        <div class="buttons">
            <button name="op" value="sumar">+</button>
            <button name="op" value="restar">−</button>
            <button name="op" value="multiplicar">×</button>
             <!-- Recarga la pagina para poder hacer otro calculo  -->
            <button type="button" onclick="window.location.href=''">Borrar</button>
        </div>

    </form>

    <?php
    //Verifica que el formulario fue enviado
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        //Recibe los valores del formulario
        $n1 = $_POST["num1"];
        $n2 = $_POST["num2"];
        $op = $_POST["op"];
        //Donde guardaremos el resultado
        $resultado = 0;
        //Para saber que operacion hacer 
        if($op == "sumar"){
            $resultado = $n1 + $n2;
        } elseif($op == "restar"){
            $resultado = $n1 - $n2;
        } elseif($op == "multiplicar"){
            $resultado = $n1 * $n2;
        }
        // Para poner bonito el resultado en css y imprime el resultado 
        echo "<div class='resultado'>";
        echo "<p>Resultado: <strong>$resultado</strong></p>";
        echo "</div>";
    }
    ?>

</div>

</body>
</html>