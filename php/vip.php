<?php

include("conexion.php");
$nombre=$_POST["usuario"];
$contrasena= hash("whirlpool", $_POST["contrasena"]);

$statement="SELECT id,usuario,contrasena
            FROM usuarios
            WHERE usuario='$nombre'
            AND contrasena ='$contrasena'";

$resultado = $conexionBD->query($statement);
if($resultado->num_rows > 0){
    echo "Bienvenid@ " .$nombre;
    session_start();
    $_SESSION["datosusuario"] = mysqli_fetch_assoc($resultado);
    $_SESSION["usuario"]= $nombre;
}
else{
    echo "Usuario o contraseña incorrecta";
}
//var_dump($resultado);

?>