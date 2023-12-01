<?php
session_start();

if(!isset($_SESSION['usuario'])){
    echo '
    <script>
    alert("Por favor, debe iniciar session");
    window.location = "u_login.html";
    </script>
    ';
    session_destroy();
    die();
}
?>

<?php
    include_once ("conexion.php");
    error_reporting(0);
    $Iddevolucion = $_POST["Iddevolucion"];
    $codigo = $_POST["codigo"]
    $nomproducto = $_POST["nomproducto"];
    $motivodevolucion = $_POST["motivodevolucion"];
    $Idempleados = $_POST["Idempleados"];
    $fecha = $_POST["fecha"];
    
    $actualizardev = "UPDATE devolucion SET Iddevolucion='$Iddevolucion', codigo='$codigo', nomproducto='$nomproducto', 
    observaciones='$observaciones', Idempleados='$Idempleados', fecha='$fecha' WHERE Iddevolucion='$Iddevolucion'";
    $resultadodev = mysqli_query($conn, $actualizarprod);
    if ($resultadodev) {
        echo "<script>alert('Registro actualizado exitosamente'); window.location='devolucion.php';</script>";
        } else {
        echo "Error: " . $actualizardev . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
?>