<?php

$nombre = $_POST['nombre'];
$apellido=$_POST['apellido'];
$cedula = $_POST['cedula'];
$celular= $_POST['celular'];
$id = $_POST['id'];

include("conexion.php");

$solicitud = "UPDATE clientes SET Nombre='$nombre', Apellido='$apellido', Cedula='$cedula', Celular='$celular' WHERE id=$id";

$resultado = mysqli_query($conexion, $solicitud);

header("location: consultar.php");