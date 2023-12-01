<?php

error_reporting(0);
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$clave = hash('sha1', $clave);
session_start();
$_SESSION['usuario']=$usuario;
include_once("conexion.php");
$validar_login = "SELECT*FROM usuarios WHERE usuario='$usuario' and clave='$clave'";
$resultado = mysqli_query($conn, $validar_login);

$filas = mysqli_fetch_array($resultado);

if($filas['Idrol']==1){
    header("location:u_inicio.php");
}
else 
if($filas['Idrol']==2){
    header("location:u_auxiliar.php");
}else{

    echo '<script>
    alert("Usuario y/o contraseña son incorrecta, por favor verifique los datos introducido");
    window.location = "u_login.html";    
    </script>
    ';
    exit;
}
mysqli_free_result($resultado);
mysqli_close($conn);
?>