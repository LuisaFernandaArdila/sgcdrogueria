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
    $Idresiduos = $_POST["Idresiduos"];
    $fecha = $_POST["fecha"];
    $tiporesiduo = $_POST["tiporesiduo"];
    $cantidad = $_POST["cantidad"];
    $infogeneracionresiduos = $_POST["infogeneracionresiduos"];
    $Idempleados = $_POST["Idempleados"];

    $residuos = "INSERT INTO residuos (Idresiduos, fecha, tiporesiduo, cantidad, infogeneracionresiduos, Idempleados)
    VALUES ('$Idresiduos', '$fecha', '$tiporesiduo', '$cantidad', '$infogeneracionresiduos', '$Idempleados')";
    if (mysqli_query($conn, $residuos)) {
    echo "<script>alert('Nuevo registro almacenado exitosamente'); window.location='moduloentorno.php';</script>";
    } else {
    echo "Error: " . $residuos . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>