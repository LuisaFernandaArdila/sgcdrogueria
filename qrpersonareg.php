<?php
    include_once ("conexion.php");
    error_reporting(0);
    $Idqr = $_POST["Idqr"];
    $tiposolicitud = $_POST["tiposolicitud"];
    $cedula = $_POST["cedula"];
    $solicitud = $_POST["solicitud"];
    $respuesta = $_POST["respuesta"];
    $fecha = $_POST["fecha"];
        
    $qr = "INSERT INTO quejasreclamos (Idqr, tiposolicitud, cedula, solicitud, respuesta, fecha)
    VALUES ('$Idqr', '$tiposolicitud', '$cedula', '$solicitud', '$respuesta', '$fecha')";

    if (mysqli_query($conn, $qr)) {
    echo "<script>alert('Nuevo registro almacenado exitosamente'); window.location='index.php';</script>";
    } else {
    echo "Error: " . $qr . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>