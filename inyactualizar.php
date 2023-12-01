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
    $Idinyectologia = $_POST["Idinyectologia"];
    $cedulacliente = $_POST["cedulacliente"];
    $nomcliente = $_POST["nomcliente"];
    $codigo = $_POST["codigo"];
    $nomproducto = $_POST["nomproducto"];
    $gluteoaplicacion = $_POST["gluteoaplicacion"];
    $Idempleados = $_POST["Idempleados"];
    $fecha = $_POST["fecha"];
    
    $inyectologia = "UPDATE inyectologia SET Idinyectologia='$Idinyectologia', cedulacliente='$cedulacliente', 
    nomcliente='$nomcliente', codigo='$codigo', nomproducto='$nomproducto', gluteoaplicacion='$gluteoaplicacion', 
    Idempleados='$Idempleados', fecha='$fecha' WHERE Idinyectologia='$Idinyectologia'";
    $resultadoeduc = mysqli_query($conn, $inyectologia);
    if ($resultadoeduc) {
        echo "<script>alert('Registro actualizado exitosamente'); window.location='inyectologia.php';</script>";
        } else {
        echo "Error: " . $inyectologia . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
?>