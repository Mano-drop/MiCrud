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

</body>
</html>
