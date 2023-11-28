<?php
    include_once ("conexion.php");
    error_reporting(0);
    $Idinyectologia = $_POST["Idinyectologia"];
    $cedulacliente = $_POST["cedulacliente"];
    $nomcliente = $_POST["nomcliente"];
    $codigo = $_POST["codigo"];
    $nomproducto = $_POST["nomproducto"];
    $glúteoaplicación = $_POST["glúteoaplicación"];
    $Idempleados = $_POST["Idempleados"];
    $fecha = $_POST["fecha"];
        
    $inyectologia = "INSERT INTO inyectologia (Idinyectologia, cedulacliente, nomcliente, codigo, nomproducto, 
    glúteoaplicación, Idempleados, fecha)
    VALUES ('$Idinyectologia', '$cedulacliente', '$nomcliente', '$codigo', '$nomproducto', '$glúteoaplicación', 
    '$Idempleados', '$fecha')";
    if (mysqli_query($conn, $inyectologia)) {
    echo "<script>alert('Nuevo registro almacenado exitosamente'); window.location='inyectologia.php';</script>";
    } else {
    echo "Error: " . $inyectologia . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>