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

    $fecha = $_POST["fecha"];
    $jornada = $_POST["jornada"];
    $temperatura = $_POST["temperatura"];
    $humedad = $_POST["humedad"];
    $Idempleados = $_POST["Idempleados"];

    $temperatura = "INSERT INTO temperaturahumedad (fecha, jornada, temperatura, humedad, Idempleados)
    VALUES ('$fecha', '$jornada', '$temperatura', '$humedad', '$Idempleados')";
    if (mysqli_query($conn, $temperatura)) {
    echo "<script>alert('Nuevo registro almacenado exitosamente'); window.location='temperatura.php';</script>";
    } else {
    echo "Error: " . $temperatura . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>