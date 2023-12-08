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
    $codigo = $_POST["codigo"];
    $nomproducto = $_POST["nomproducto"];
    $motivodevolucion = $_POST["motivodevolucion"];
    $Idempleado = $_POST["Idempleados"];
    $fecha = $_POST["fecha"];
        
    $sql = "INSERT INTO devolucion (Iddevolucion, codigo, nomproducto, motivodevolucion, Idempleado, fecha)
    VALUES ('$Iddevolucion', '$codigo', '$nomproducto', '$motivodevolucion', '$Idempleado', '$fecha')";
    if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Nuevo registro almacenado exitosamente'); window.location='devolucion.php';</script>";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>