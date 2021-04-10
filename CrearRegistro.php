<?php
include ("conexion.php");

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$cedula = $_POST['cedula'];
$celular = $_POST['celular'];

$solicitud = "INSERT INTO clientes (Nombre, Apellido, Cedula, Celular) VALUES ('$nombre', '$apellido', '$cedula', '$celular')";

$resultado = mysqli_query($conexion, $solicitud);
header("location:index.php");