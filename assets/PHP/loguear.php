<?php
session_start();
require 'conexion.php';
$user = $_POST['user'];
$clave = $_POST['pass'];


$query = "SELECT COUNT(*) as contar FROM datos where correo = '$user' and contra = '$clave' ";
$bdconect = mysqli_query($link,$query);
$parametros = mysqli_fetch_array($bdconect);
if($parametros['contar']>0){
   $_SESSION['username'] = $user;
   //se supone que aca va la pagina que debe redirigir al iniciar sesion
  //header("location: ../Main.html");
  header("location: ../../paginaprincipal.php");
}else {
    echo "<h1>datos incorrectos</h1> <br> ";
    echo "<a href='../../login.html'>Volver</a>";
}


?>