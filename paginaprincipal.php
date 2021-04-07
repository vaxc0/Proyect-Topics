<?php
session_start();
$sesion = $_SESSION['username'];
if(!isset($sesion)){
    header("location: Login.html");

}else{

    echo "<h1> BIENVENIDO $sesion </h1><br>";

    echo "<a href='assets/PHP/salir.php'>Salir</a>";
    header("location: Native.html");
}

?>