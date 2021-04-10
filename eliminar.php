<?php
include("conexion.php");
$id = $_GET['id'];

$solicitud = "DELETE FROM clientes where ID=$id";
$resultado = mysqli_query($conexion, $solicitud);
header("location:consultar.php");