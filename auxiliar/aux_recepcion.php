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
    $Idrecepcion = $_POST["Idrecepcion"];
    $codigo = $_POST["codigo"];
    $nomproducto = $_POST["nomproducto"];
    $observaciones = $_POST["observaciones"];
    $Idempleados = $_POST["Idempleados"];
    $fecha = $_POST["fecha"];
        
    $sql = "INSERT INTO recepciontecnica (Idrecepcion, codigo, nomproducto, observaciones, Idempleado, fecha)
    VALUES ('$Idrecepcion', '$codigo', '$nomproducto', '$observaciones', '$Idempleados', '$fecha')";
    if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Nuevo registro almacenado exitosamente'); window.location='moduloproducto.php';</script>";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>