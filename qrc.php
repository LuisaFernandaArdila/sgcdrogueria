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
    $Idqr = $_POST["Idqr"];
    $tiposolicitud = $_POST["tiposolicitud"];
    $cedula = $_POST["cedula"];
    $solicitud = $_POST["solicitud"];
    $respuesta = $_POST["respuesta"];
    $Idempleado = $_POST["Idempleado"];
    $fecha = $_POST["fecha"];
    
    $qractualizar = "UPDATE quejasreclamos SET Idqr='$Idqr', tiposolicitud='$tiposolicitud', cedula='$cedula', 
    solicitud='$solicitud', respuesta='$respuesta', Idempleado='$Idempleado', fecha='$fecha' WHERE Idqr='$Idqr'";
    $resultadoqr = mysqli_query($conn, $qractualizar);
    if ($resultadoqr) {
        echo "<script>alert('Registro actualizado exitosamente'); window.location='qr.php';</script>";
        } else {
        echo "Error: " . $qractualizar . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
?>