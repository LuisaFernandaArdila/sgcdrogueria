<?php
session_start();

if(!isset($_SESSION['usuario'])){
    echo '
    <script>
    alert("Por favor, debe iniciar session");
    window.location = "u_login.html";
    </script>
    ';
    session_destroy();
    die();
}
?>

<?php 

include_once ("conexion.php");

error_reporting(0);
$cedula = $_GET["cedula"];
$eliminar = "DELETE FROM persona WHERE cedula = '$cedula'";

$resultado = mysqli_query($conn, $eliminar);

if ($resultado){
    echo "<script>alert('Registro eliminado exitosamente'); window.location='persona.php';</script>";
}else{
    echo "Error eliminando registro".mysqli_error($conn);
}
mysqli_close($conn);
?>