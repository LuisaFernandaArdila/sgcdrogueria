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
    $cedula = $_POST["cedula"];
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $direccion = $_POST["direccion"];
    
    $actualizar = "UPDATE persona SET cedula='$cedula', nombre='$nombre', telefono='$telefono', 
    direccion='$direccion' WHERE cedula='$cedula'";
    $resultado = mysqli_query($conn, $actualizar);
    if ($resultado) {
        echo "<script>alert('Registro actualizado exitosamente'); window.location='persona.php';</script>";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
?>