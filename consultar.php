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
    <h1>Bienvenidos A la Consulta De Clientes del Gym</h1>
</header>

<br>
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
<br>
<div style="text-align: center">
        <button type="button" name="btnmenu1" onclick="location.href='index.php';">Registro De Clientes</button>
</div>

</body>
</html>
