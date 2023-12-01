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
$Idrecepcion = $_GET["Idrecepcion"];
$eliminarrect = "DELETE FROM reepciontecnica WHERE Idrecepcion = '$Idrecepcion'";

$resultadorect = mysqli_query($conn, $eliminarrect);

if ($resultadoprod){
    echo "<script>alert('Registro eliminado exitosamente'); window.location='recepcion.php';</script>";
}else{
    echo "Error eliminando registro".mysqli_error($conn);
}
mysqli_close($conn);
?>