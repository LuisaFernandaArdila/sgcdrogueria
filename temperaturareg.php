<?php
    include_once ("conexion.php");
    error_reporting(0);
    $Idtemhum = $_POST["Idtemhum"];
    $fecha = $_POST["fecha"];
    $jornada = $_POST["jornada"];
    $temperatura = $_POST["temperatura"];
    $humedad = $_POST["humedad"];
    $Idempleados = $_POST["Idempleados"];

    $temperatura = "INSERT INTO temperaturahumedad (Idtemhum, fecha, jornada, temperatura, humedad, Idempleados)
    VALUES ('$Idtemhum', '$fecha', '$jornada', '$temperatura', '$humedad', '$Idempleados')";
    if (mysqli_query($conn, $temperatura)) {
    echo "<script>alert('Nuevo registro almacenado exitosamente'); window.location='temperatura.php';</script>";
    } else {
    echo "Error: " . $temperatura . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>