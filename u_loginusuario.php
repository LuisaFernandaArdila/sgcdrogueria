<?php

session_start();
include_once("conexion.php");

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$clave = hash('sha1', $clave);

$validar_login = mysqli_query($conn, "SELECT*FROM usuarios WHERE usuario='$usuario' and clave='$clave'");
if(mysqli_num_rows($validar_login) > 0) {
    $_SESSION['usuario'] = $usuario;
    header("Location: u_inicio.php");
    exit;
}else{
    echo '<script>
    alert("Usuario y/o contraseña son incorrecta, por favor verifique los datos introducido");
    window.location = "u_login.html";    
    </script>
    ';
    exit;
}
?>