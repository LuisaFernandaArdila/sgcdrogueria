<?php 

include_once ("conexion.php");

error_reporting(0);
$Idtemhum= $_GET["Idtemhum"];
$eliminarth = "DELETE FROM temperaturahumedad WHERE Idtemhum = '$Idtemhum'";

$resultadoth = mysqli_query($conn, $eliminarth);

if ($resultadoth){
    echo "<script>alert('Registro eliminado exitosamente'); window.location='temperatura.php';</script>";
}else{
    echo "Error eliminando registro".mysqli_error($conn);
}
mysqli_close($conn);
?>