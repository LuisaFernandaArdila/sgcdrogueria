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
    $Id = $_POST["Id"];
    $usuario = $_POST["usuario"];
    $clave = $_POST["clave"];
    $Idrol = $_POST["Idrol"];

    $clave = hash('sha1', $clave);
    
    $actualizar = "UPDATE usuarios SET Id='$Id', usuario='$usuario', clave='$clave', 
    Idrol='$Idrol' WHERE Id='$Id'";
    $resultado = mysqli_query($conn, $actualizar);
    if ($resultado) {
        echo "<script>alert('Registro actualizado exitosamente'); window.location='u_mostrarusuario.php';</script>";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
?>