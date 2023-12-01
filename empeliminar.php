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