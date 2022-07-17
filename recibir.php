<?php
echo"<h2>Recibiendo informacion de registro de Calzado</h2>";

$codigo=$_POST['codigo'];
echo "El codigo del calzado es :".$codigo. "<br>";

$modelo=$_POST['modelo'];
echo "La descripcion del calzado es:".$modelo. "<br>";

$talla=$_POST['talla'];
echo "La talla  del calzado es :".$talla. "<br>";

$tipo=$_POST['tipo'];
echo "La talla  del calzado es :".$tipo. "<br>";

$precio=$_POST['precio'];
echo "El precio del calzado es :".$precio. "<br>";

$idempleado="1 <br>";

include("conexion.php");

//condicion
$sql = "INSERT INTO calzado VALUES($codigo, '$modelo', $talla, '$tipo', $precio, 1)";

if (mysqli_query($conn, $sql)) 
{
    echo "Se han actualizado los datos";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
