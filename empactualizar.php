<?php
    include_once ("conexion.php");
    error_reporting(0);
    $Idempleados = $_POST["Idempleados"];
    $nomempleado = $_POST["nomempleado"];
    $cedula = $_POST["cedula"];
    
    $empleados = "UPDATE empleados SET Idempleados='$Idempleados', nomempleado='$nomempleado', 
    cedula='$cedula' WHERE Idempleados='$Idempleados'";
    $resultadoemp = mysqli_query($conn, $empleados);
    if ($resultadoemp) {
        echo "<script>alert('Registro actualizado exitosamente'); window.location='empleados.php';</script>";
        } else {
        echo "Error: " . $empleados . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
?>