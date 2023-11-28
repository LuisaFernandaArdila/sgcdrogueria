<?php 

include_once ("conexion.php");

error_reporting(0);
$Idresiduos= $_GET["Idresiduos"];
$eliminarres = "DELETE FROM residuos WHERE Idresiduos = '$Idresiduos'";

$resultadores = mysqli_query($conn, $eliminarres);

if ($resultadores){
    echo "<script>alert('Registro eliminado exitosamente'); window.location='residuos.php';</script>";
}else{
    echo "Error eliminando registro".mysqli_error($conn);
}
mysqli_close($conn);
?>