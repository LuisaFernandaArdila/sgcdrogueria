<?php
    include_once ("conexion.php");
    error_reporting(0);
    $Idlimpieza = $_POST["Idlimpieza"];
    $productoaseo = $_POST["productoaseo"];
    $zona = $_POST["zona"];
    $infoprocesolimpieza = $_POST["infoprocesolimpieza"];
    $Idempleados = $_POST["Idempleados"];
    $fecha = $_POST["fecha"];
    
    $limpieza = "UPDATE limpieza SET Idlimpieza='$Idlimpieza', productoaseo='$productoaseo', 
    zona='$zona', infoprocesolimpieza='$infoprocesolimpieza', Idempleados='$Idempleados', fecha='$fecha'
    WHERE Idlimpieza='$Idlimpieza'";
    $resultadolim = mysqli_query($conn, $limpieza);
    if ($resultadolim) {
        echo "<script>alert('Registro actualizado exitosamente'); window.location='limpieza.php';</script>";
        } else {
        echo "Error: " . $limpieza . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
?>