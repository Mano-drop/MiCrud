<!DOCTYPE html >
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Ejemplo de HTML5">
    <meta name="keywords" content="HTML5, CSS, Javascript">
    <title>Registro De Clientes del Gym</title>
</head>
<body>
<header style="text-align: center">
    <h1>Bienvenidos A La Actualizacion De Los Clientes del Gym</h1>
</header>

<br>

<?php
include("conexion.php");
$id = $_GET['id'];

$solicitud = "SELECT * FROM clientes where ID=$id";
$resultado = mysqli_query($conexion, $solicitud);

?>

<form method="POST" action="modificar.php">
    <div style="text-align: center">
 <?php
    //--------------------------------------------------------------------------------------------------------
while($fila = mysqli_fetch_array($resultado)){

     echo "Nombre: <input type='text'; name='nombre' value=' ".$fila['Nombre']."'> <br> ";
     echo "Apellido: <input type='text'; name='apellido' value=' ".$fila['Apellido']."'> <br> ";
     echo "Cedula: <input type='text'; name='cedula' value=' ".$fila['Cedula']."'> <br> ";
     echo "Celular: <input type='text'; name='celular' value=' ".$fila['Celular']."'> <br> ";
     echo "<input type='hidden' name='id' value='".$id."'><br>";
}
?>

    <input type="submit" name="ENVIAR" value="Cambiar">

    <input type="button" onclick="location.href='index.php';" value="Volver al Inicio" />

    </div>

</form>


</body>
</html>
