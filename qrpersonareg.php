<?php
    include_once ("conexion.php");
    error_reporting(0);
    $Idqr = $_POST["Idqr"];
    $solicitud = $_POST["solicitud"];
    $respuesta = $_POST["respuesta"];
    $cedula = $_POST["cedula"];
    $fecha = $_POST["fecha"];
        
    $sql = "INSERT INTO quejasyreclamos (Idqr, nombre, respuesta, cedula, fecha)
    VALUES ('$Idqr', '$nombre', '$respuesta', '$cedula', '$fecha')";
    if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Nuevo registro almacenado exitosamente'); window.location='index.php';</script>";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>