<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista de usuarios</title>
</head>
<body>
    <?php

    include("conexion.php");
    $consulta="SELECT usuario,contrasena,email FROM usuarios";

    $resultado = $conexionDB->query($consulta);
    //var_dump($resultado);

    echo"<table class=\"table table-striped\">
        <th>Nombre</th>
        <th>Contraseña</th>
        <th>Email</th>
        </th>
    ";

    while($fila= mysql_fetch_assoc($resultado)){
        $usuarios[]=$fila;
        $usuario= $fila["usuario"];
        $contrasena=$fila["contrasena"];
        $email= $fila["email"];

        echo "<tr
            <td>$usuario</td>
            <td>$contrasena</td>
            <td>$email</td>
            </tr>";
    }
    
    echo"</table>";

//var_dump($usuarios);

    ?>
</body>
</html>