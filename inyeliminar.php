<?php 

include_once ("conexion.php");

error_reporting(0);
$Idinyectologia = $_GET["Idinyectologia"];
$eliminariny = "DELETE FROM inyectologia WHERE Idinyectologia = '$Idinyectologia'";

$resultadoiny = mysqli_query($conn, $eliminariny);

if ($resultadoiny){
    echo "<script>alert('Registro eliminado exitosamente'); window.location='limpieza.php';</script>";
}else{
    echo "Error eliminando registro".mysqli_error($conn);
}
mysqli_close($conn);
?>