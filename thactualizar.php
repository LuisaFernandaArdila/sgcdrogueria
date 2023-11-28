<?php
    include_once ("conexion.php");
    error_reporting(0);
    $Idtemhum = $_POST["Idtemhum"];
    $fecha = $_POST["fecha"];
    $jornada = $_POST["jornada"];
    $temperatura = $_POST["temperatura"];
    $humedad = $_POST["humedad"];
    $Idempleados = $_POST["Idempleados"];
    
    $temperatura = "UPDATE temperaturahumedad SET Idtemhum='$Idtemhum', fecha='$fecha', jornada='$jornada', 
    temperatura='$temperatura', humedad='$humedad', Idempleados='$Idempleados' WHERE Idtemhum='$Idtemhum'";
    $resultadoth = mysqli_query($conn, $temperatura);
    if ($resultadoth) {
        echo "<script>alert('Registro actualizado exitosamente'); window.location='temperatura.php';</script>";
        } else {
        echo "Error: " . $temperatura . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
?>