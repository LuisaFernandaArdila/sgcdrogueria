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