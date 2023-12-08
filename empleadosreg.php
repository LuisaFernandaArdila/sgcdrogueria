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
    $Idempleados = $_POST["Idempleados"];
    $nomempleado = $_POST["nombreempleados"];
    $cedula = $_POST["cedulaempleados"];
        
    $sql = "INSERT INTO empleados (Idempleados, nomempleado, cedula)
    VALUES ('$Idempleados', '$nomempleado', '$cedula')";
    if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Nuevo registro almacenado exitosamente'); window.location='empleados.php';</script>";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>