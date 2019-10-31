<?php


$conexionBD=new mysql("localhost","root","12345678","graduacionc");

/*if($conexionBD->connect_error){
    die("Error de conexion". $conexionBD->connect_error);
}
else{
    echo"Conexion exitosa";
}

?>