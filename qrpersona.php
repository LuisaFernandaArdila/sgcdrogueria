<?php
    include_once ("conexion.php");
    error_reporting(0);
    $cedula = $_POST["cedula"];
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $direccion = $_POST["direccion"];
        
    $sql = "INSERT INTO persona (cedula, nombre, telefono, direccion)
    VALUES ('$cedula', '$nombre', '$telefono', '$direccion')";
    if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Nuevo registro almacenado exitosamente'); window.location='qrpersonaform.html';</script>";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>