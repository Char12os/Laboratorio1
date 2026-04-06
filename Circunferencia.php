<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circuinferencia</title>
    <link rel="stylesheet" href="Circunferencia.css">
</head>
<body>
    <form class="Formulario" method="POST" action="">
       <h2>Cincunferencia</h2>
        <input type="number" name="radio" min="1" step="any" placeholder="Ingrese su radio" value="<?php echo isset($_POST['radio']) ? $_POST['radio'] : ''; ?>">
        <br>
        <button type= "submit">Calcular</button>
        <button type="button" onclick="window.location.href=''"> Borrar </button>
        <br>
    <?php
    //Verifica que el formulario fue enviado
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $radio= $_POST ["radio"];

        //Validacion
      if($radio <=0){
        echo "<br>Ingrese un número"; 
      }  else{
        //Formula del calculo 
        $area = pi() * pow($radio, 2);

        echo "<h2>Resultado</h2>";
        echo "<p>El área es: <strong>" . round($area, 2) . "</strong></p>";
      }
    }
    ?>
    </form>

</body>
</html>