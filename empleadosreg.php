<?php
    include_once ("conexion.php");
    error_reporting(0);
    $Idempleados = $_POST["Idempleados"];
    $nomempleado = $_POST["nomempleado"];
    $cedula = $_POST["cedula"];
        
    $sql = "INSERT INTO empleados (Idempleados, nomempleado, cedula)
    VALUES ('$Idempleados', '$nomempleado', '$cedula')";
    if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Nuevo registro almacenado exitosamente'); window.location='empleados.php';</script>";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>