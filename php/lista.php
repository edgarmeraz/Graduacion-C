<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista de usuarios</title>
</head>
<body>
    <?php

    include("conexion.php");
    $consulta="SELECT nombre,contraseña,email FROM usuarios";

    $resultado = $conexionDB->query($consulta);
    var_dump($resultado);

    ?>
</body>
</html>