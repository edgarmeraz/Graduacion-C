<?php

session_start();
if(isset($_SESSION["usuario"])){
    echo "Bienvenido al área de miembros del club";

}
else{
    header("Location: login.php");
}

?>