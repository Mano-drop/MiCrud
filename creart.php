<?php
include ("conexion.php");

$solicitud = "CREATE TABLE clientes (ID int NOT NULL AUTO_INCREMENT, Nombre varchar (15), Apellido varchar (15), Cedula varchar (15), Celular varchar (15), PRIMARY KEY(ID))";

$resultado = mysqli_query($conexion, $solicitud);
