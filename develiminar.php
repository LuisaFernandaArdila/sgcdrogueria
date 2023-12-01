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
$Iddevolucion = $_GET["Iddevolucion"];
$eliminardev = "DELETE FROM devolucion WHERE Iddevolucion = '$Iddevolucion'";

$resultadodev = mysqli_query($conn, $eliminardev);

if ($resultadodev){
    echo "<script>alert('Registro eliminado exitosamente'); window.location='devolucion.php';</script>";
}else{
    echo "Error eliminando registro".mysqli_error($conn);
}
mysqli_close($conn);
?>