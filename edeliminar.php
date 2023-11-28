<?php 

include_once ("conexion.php");

error_reporting(0);
$Ideducacionpac = $_GET["Ideducacionpac"];
$eliminareduc = "DELETE FROM educacionpaciente WHERE Ideducacionpac = '$Ideducacionpac'";

$resultadoeduc = mysqli_query($conn, $eliminareduc);

if ($resultadoeduc){
    echo "<script>alert('Registro eliminado exitosamente'); window.location='educacion.php';</script>";
}else{
    echo "Error eliminando registro".mysqli_error($conn);
}
mysqli_close($conn);
?>