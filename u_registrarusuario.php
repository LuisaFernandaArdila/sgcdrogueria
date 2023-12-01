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

$clave = hash('sha1', $clave);

$sql = "INSERT INTO usuarios(Id, usuario, clave) VALUES ('$Id', '$usuario', '$clave')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Nuevo registro almacenado exitosamente'); window.location='u_inicio.php';</script>";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

/*
$verificar_usuario = mysqli_query($conn, "SELECT * FROM usuarios WHERE usuario='$usuario'");

if (mysqli_num_rows($verificar_usuario) > 0){
    echo '
    <script>
    alert("Este usuario ya esta almacenado, intente con otro");
    window.location = "u_inicio.php";   
    </script>
    ';
    exit();
    
} else {
    echo '
    <script>
    alert("Usuario almacenados exitosamente");
    window.location = "u_inicio.php";   
    </script>
    ';
}*/
mysqli_close($conn);
?>