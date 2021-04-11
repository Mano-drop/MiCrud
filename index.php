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
    <h1>Bienvenidos Al Registro De Clientes del Gym</h1>
</header>

<br>

    <div style="color: #070707; border-radius: 5px; height:50%; width:40%; background-color: aliceblue; text-align: center; position:relative; bottom:30%; left:30%" >

        <header style="background-color: #12a5ea; border-radius: 5px">Registrar Nuevo Cliente</header>
        <form method="POST" action="CrearRegistro.php">

    Nombre: <input type="text" name="nombre" align=""><br><br>
    Apellido: <input type="text" name="apellido"><br><br>
    Cedula: <input type="text" name="cedula"><br><br>
    Celular: <input type="text" name="celular"><br><br>
    <input type="submit" name="ENVIAR" value="Registrar Cliente">
    <input type="button"  onclick="location.href='consultar.php';" value="Consultar Clientes">
</form>
</div>

<div style=" text-align: center;"> <h3>Consulta De Clientes del Gym</h3></div>

<?php
//conexion con la base de datos
include("conexion.php");

$solicitud = "SELECT * FROM clientes";
$resultado = mysqli_query($conexion, $solicitud);

echo "<table border='1' align='center'> <tr><td bgcolor='#87cefa'>Nombre y Apellido</td><td bgcolor='#87cefa'>Cedula</td><td bgcolor='#87cefa'>Celular</td><td bgcolor='#87cefa'; colspan='2'>Opciones</td></tr>";

while($fila=mysqli_fetch_array($resultado)){

    echo "<tr>";
    echo "<td>" . $fila['Nombre'] ." " . $fila['Apellido'] . ",</td>";
    echo "<td>" . $fila['Cedula']  . "</td>";
    echo "<td>" . $fila['Celular']  . "</td>";
    echo "<td><a href='eliminar.php?id=".$fila['ID']." '>Eliminar</a></td>";
    echo "<td><a href='selecionar.php?id=".$fila['ID']." '>Modificar</a></td>";
    echo "</tr>";
}


echo "</table>"

?>
</body>
</html>
