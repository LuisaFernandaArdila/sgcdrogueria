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
    
    $educacion = "UPDATE educacionpaciente SET Ideducacionpac='$Ideducacionpac', cedula='$cedula', 
    nomcliente='$nomcliente', codigo='$codigo', nomproducto='$nomproducto', contraindicaciones='$contraindicaciones', 
    Idempleados='$Idempleados', fecha='$fecha' WHERE Ideducacionpac='$Ideducacionpac'";
    $resultadoeduc = mysqli_query($conn, $educacion);
    if ($resultadoeduc) {
        echo "<script>alert('Registro actualizado exitosamente'); window.location='educacion.php';</script>";
        } else {
        echo "Error: " . $educacion . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
?>