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
    include_once ("../conexion.php");
    error_reporting(0);

    $cedula = $_POST["cedula"];
    $nomcliente = $_POST["nomcliente"];
    $codigo = $_POST["codigo"];
    $nomproducto = $_POST["nomproducto"];
    $gluteoaplicacion = $_POST["gluteoaplicacion"];
    $Idempleados = $_POST["Idempleados"];
    $fecha = $_POST["fecha"];
        
    $inyectologia = "INSERT INTO inyectologia (cedula, nomcliente, codigo, nomproducto, 
    gluteoaplicacion, Idempleados, fecha)
    VALUES ('$cedula', '$nomcliente', '$codigo', '$nomproducto', '$gluteoaplicacion', 
    '$Idempleados', '$fecha')";
    if (mysqli_query($conn, $inyectologia)) {
    echo "<script>alert('Nuevo registro almacenado exitosamente'); window.location='moduloatencion.php';</script>";
    } else {
    echo "Error: " . $inyectologia . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>