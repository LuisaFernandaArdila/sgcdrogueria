<?php
    include_once ("conexion.php");
    error_reporting(0);
    $Idresiduos = $_POST["Idresiduos"];
    $fecha = $_POST["fecha"];
    $tiporesiduo = $_POST["tiporesiduo"];
    $cantidad = $_POST["cantidad"];
    $infogeneracionresiduos = $_POST["infogeneracionresiduos"];
    $Idempleados = $_POST["Idempleados"];
    
    $residuos = "UPDATE residuos SET Idresiduos='$Idresiduos', fecha='$fecha', tiporesiduo='$tiporesiduo', 
    cantidad='$cantidad', infogeneracionresiduos='$infogeneracionresiduos', Idempleados='$Idempleados' WHERE Idresiduos='$Idresiduos'";
    $resultadores = mysqli_query($conn, $residuos);
    if ($resultadores) {
        echo "<script>alert('Registro actualizado exitosamente'); window.location='residuos.php';</script>";
        } else {
        echo "Error: " . $residuos . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
?>