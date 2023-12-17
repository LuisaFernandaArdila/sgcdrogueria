<?php
    include_once ("conexion.php");
    error_reporting(0);
    
    $cedulacliente = $_POST["cedulacliente"];
    $calificacion = $_POST["calificacion"];
    $sugerencias = $_POST["sugerencias"];
    $fecha = $_POST["fecha"];
        
    $satisfaccion = "INSERT INTO satisfaccioncliente (cedulacliente, calificacion, sugerencias, fecha)
    VALUES ('$cedulacliente', '$calificacion', '$sugerencias', '$fecha')";

    if (mysqli_query($conn, $satisfaccion)) {
    echo "<script>alert('Nuevo registro almacenado exitosamente'); window.location='INDEX.PHP';</script>";
    } else {
    echo "Error: " . $satisfaccion . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>