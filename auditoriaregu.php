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
    $fecha = $_POST["fecha"];
    $hallazgos = $_POST["hallazgos"];
    $acciones = $_POST["acciones"];
    $Idempleados = $_POST["Idempleados"];
        
    $sql = "INSERT INTO auditoriainterna (fecha, hallazgos, acciones, Idempleados)
    VALUES ('$fecha', '$hallazgos', '$acciones', '$Idempleados')";
    if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Nuevo registro almacenado exitosamente'); window.location='auditoria.php';</script>";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>