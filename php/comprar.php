<?php
session_start();

include("conexion.php");

if($_POST["paquete1"]>0){
    $idusuario = $_SESSION["datosusuario"]["id"];
    $lugares = $_POST["paquete1"];

    $statementVerificarDuplicados = "SELECT * FROM usuarios_paquetes
                                    WHERE idusuario = $idusuario
                                    AND paquete = 1";
    $resultadoVerificarDuplicados = $conexionBD->query($statementVerificarDuplicados);
    $duplicados = $resultadoVerificarDuplicados->num_rows;

    if($duplicados == 0){
        $statement = "INSERT INTO usuarios_paquetes (idusuario,paquete,lugares)
        VALUES ($idusuario, 1, $lugares)";
        $resultado = $conexionBD ->query($statement);
        echo "resultado de insertar paquete1: " .$resultado;
    }
}

if($_POST["paquete2"]>0){
    $idusuario = $_SESSION["datosusuario"]["id"];
    $lugares = $_POST["paquete2"];

    $statementVerificarDuplicados = "SELECT * FROM usuarios_paquetes
                                    WHERE idusuario = $idusuario
                                    AND paquete = 2";
    $resultadoVerificarDuplicados = $conexionBD->query($statementVerificarDuplicados);
    $duplicados = $resultadoVerificarDuplicados->num_rows;

    if($duplicados == 0){
        $statement = "INSERT INTO usuarios_paquetes (idusuario,paquete,lugares)
        VALUES ($idusuario, 2, $lugares)";
        $resultado = $conexionBD ->query($statement);
        echo "resultado de insertar paquete2: " .$resultado;
    }
}

if($_POST["paquete3"]>0){
    $idusuario = $_SESSION["datosusuario"]["id"];
    $lugares = $_POST["paquete3"];

    $statementVerificarDuplicados = "SELECT * FROM usuarios_paquetes
                                    WHERE idusuario = $idusuario
                                    AND paquete = 3";
    $resultadoVerificarDuplicados = $conexionBD->query($statementVerificarDuplicados);
    $duplicados = $resultadoVerificarDuplicados->num_rows;

    if($duplicados == 0){
        $statement = "INSERT INTO usuarios_paquetes (idusuario,paquete,lugares)
        VALUES ($idusuario, 3, $lugares)";
        $resultado = $conexionBD ->query($statement);
        echo $statement;
        echo "resultado de insertar paquete3: " .$resultado;
    }
}

echo "<p>Lugares comprados</p>";

echo"<p>" .$_POST["paquete1"]."</p>";
echo"<p>" .$_POST["paquete2"]."</p>";
echo"<p>" .$_POST["paquete3"]."</p>";

echo"<p>Usuario que hizo la operacion</p>";
echo"<p>" .$_SESSION["datosusuario"]["id"]."</p>";










?>