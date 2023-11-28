<?php
    include_once ("conexion.php");
    error_reporting(0);
    $Ideducacionpac = $_POST["Ideducacionpac"];
    $cedula = $_POST["cedula"];
    $nomcliente = $_POST["nomcliente"];
    $codigo = $_POST["codigo"];
    $nomproducto = $_POST["nomproducto"];
    $contraindicaciones = $_POST["contraindicaciones"];
    $Idempleados = $_POST["Idempleados"];
    $fecha = $_POST["fecha"];
        
    $educacion = "INSERT INTO educacionpaciente (Ideducacionpac, cedula, nomcliente, codigo, nomproducto, contraindicaciones, 
    Idempleados, fecha)
    VALUES ('$Ideducacionpac', '$cedula', '$nomcliente', '$codigo', '$nomproducto', '$contraindicaciones', 
    '$Idempleados', '$fecha')";
    if (mysqli_query($conn, $educacion)) {
    echo "<script>alert('Nuevo registro almacenado exitosamente'); window.location='educacion.php';</script>";
    } else {
    echo "Error: " . $educacion . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>