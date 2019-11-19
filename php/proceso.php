    <?php
    include("conexion.php");

    $nombre=$_POST["nombre"];
    $contrasena=hash ("whirlpool", $_POST["contrasena"]);
    $email=$_POST["email"];
    $statement="INSERT INTO usuarios (usuario, contrasena, email) VALUES ('$nombre','$contrasena','$email')";

    $resultado= $conexionBD->query($statement);

    if($resultado){
        echo "registro exitoso";
    }
    else{
        "error en el registro";
    }

    ?>

