<?php
    include_once ("conexion.php");
    error_reporting(0);
    $Idresiduos = $_POST["Idresiduos"];
    $fecha = $_POST["fecha"];
    $tiporesiduo = $_POST["tiporesiduo"];
    $cantidad = $_POST["cantidad"];
    $infogeneracionresiduos = $_POST["infogeneracionresiduos"];
    $Idempleados = $_POST["Idempleados"];

    $residuos = "INSERT INTO residuos (Idresiduos, fecha, tiporesiduo, cantidad, infogeneracionresiduos, Idempleados)
    VALUES ('$Idresiduos', '$fecha', '$tiporesiduo', '$cantidad', '$infogeneracionresiduos', '$Idempleados')";
    if (mysqli_query($conn, $residuos)) {
    echo "<script>alert('Nuevo registro almacenado exitosamente'); window.location='residuos.php';</script>";
    } else {
    echo "Error: " . $residuos . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>