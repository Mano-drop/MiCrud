<?php

$host = "localhost";
$user = "Manuel";
$pass = "Elpilar-2021";
$db = "Gym";

$conexion = mysqli_connect($host, $user, $pass, $db);
    mysqli_set_charset($conexion, "utf8");
