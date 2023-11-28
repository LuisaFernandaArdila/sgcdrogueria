<?php
    include_once ("conexion.php");
    error_reporting(0);
    $Idrecepcion = $_POST["Idrecepcion"];
    $codigo = $_POST["codigo"]
    $nomproducto = $_POST["nomproducto"];
    $observaciones = $_POST["observaciones"];
    $Idempleados = $_POST["Idempleados"];
    $fecha = $_POST["fecha"];
    
    $actualizarrect = "UPDATE recepciontecnica SET Idrecepcion='$Idrecepcion', codigo='$codigo', nomproducto='$nomproducto', 
    observaciones='$observaciones', Idempleados='$Idempleados', fecha='$fecha' WHERE Idrecepcion='$Idrecepcion'";
    $resultadorect = mysqli_query($conn, $actualizarprod);
    if ($resultadoprod) {
        echo "<script>alert('Registro actualizado exitosamente'); window.location='recepcion.php';</script>";
        } else {
        echo "Error: " . $actualizarrect . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
?>