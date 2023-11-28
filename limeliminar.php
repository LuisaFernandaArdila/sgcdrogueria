<?php 

include_once ("conexion.php");

error_reporting(0);
$Idlimpieza= $_GET["Idlimpieza"];
$eliminarlim = "DELETE FROM limpieza WHERE Idlimpieza = '$Idlimpieza'";

$resultadolim = mysqli_query($conn, $eliminarlim);

if ($resultadolim){
    echo "<script>alert('Registro eliminado exitosamente'); window.location='limpieza.php';</script>";
}else{
    echo "Error eliminando registro".mysqli_error($conn);
}
mysqli_close($conn);
?>