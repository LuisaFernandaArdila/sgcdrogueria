<?php 

include_once ("conexion.php");

error_reporting(0);
$codigo = $_GET["codigo"];
$eliminarprod = "DELETE FROM producto WHERE codigo = '$codigo'";

$resultadoprod = mysqli_query($conn, $eliminarprod);

if ($resultadoprod){
    echo "<script>alert('Registro eliminado exitosamente'); window.location='producto.php';</script>";
}else{
    echo "Error eliminando registro".mysqli_error($conn);
}
mysqli_close($conn);
?>