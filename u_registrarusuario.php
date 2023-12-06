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
include_once("conexion.php");
error_reporting(0);
$Id = $_POST["Id"];
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];
$Idrol = $_POST["Idrol"];

$clave = hash('sha1', $clave);

$sql = "INSERT INTO usuarios(Id, usuario, clave, Idrol) VALUES ('$Id', '$usuario', '$clave', '$Idrol')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Nuevo registro almacenado exitosamente'); window.location='u_inicio.php';</script>";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
mysqli_close($conn);
?>