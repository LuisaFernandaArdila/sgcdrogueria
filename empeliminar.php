<?php 

include_once ("conexion.php");

error_reporting(0);
$Idempleados = $_GET["Idempleados"];
$eliminaremp = "DELETE FROM empleados WHERE Idempleados = '$Idempleados'";

$resultadoemp = mysqli_query($conn, $eliminaremp);

if ($resultadoemp){
    echo "<script>alert('Registro eliminado exitosamente'); window.location='empleados.php';</script>";
}else{
    echo "Error eliminando registro".mysqli_error($conn);
}
mysqli_close($conn);
?>