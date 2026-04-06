<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pulgadas</title>
    <link rel="stylesheet" href="Circunferencia.css">
</head>
<body>
    <form class="Formulario" method="POST" action="">
        <input type="number" name="pulgadas" min="1" step="any" value="<?php echo isset($_POST['pulgadas']) ? $_POST['pulgadas'] : ''; ?>">
        <br>
        <button type= "submit">Calcular</button>
        <button type="button" onclick="window.location.href=''"> Borrar </button>
        <br>
    <?php
    //Verifica que el formulario fue enviado
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $pulgadas= $_POST ["pulgadas"];

        //Validacion
      if($pulgadas <=0){
        echo "<br>Ingrese un numero"; 
      }  else{
        //Formula de pulgadas a cm
        $cm = $pulgadas * 2.54;

        echo "<h2>Resultado</h2>";
        echo "<p>Equivale a: <strong>" . round($cm, 2) . " cm</strong></p>";
      }
    }
    ?>
    </form>

</body>
</html>