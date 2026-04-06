<?php
$Nombre = $_REQUEST["nombre"];
//Trimming (Quita espacios al inicio y final)
$Nombre = trim($Nombre);
//Normalizacion (Todo en minuscula)
$Nombre = strtolower($Nombre);
//Sanitización (Eliminar cosas raras)
$Nombre = htmlspecialchars($Nombre);

echo "El nombre es:" .$Nombre."<br>";

$Edad = $_POST["edad"];
//Trimming
$Edad = trim($Edad);
//Santización
$Edad = filter_var($Edad, FILTER_SANITIZE_NUMBER_INT);

if(isset($Edad)and $Edad>18){
    //Acciones
    echo "Usted puede votar en las próximas elecciones 2028";
}else echo "Usted no es mayor de edad";
?>