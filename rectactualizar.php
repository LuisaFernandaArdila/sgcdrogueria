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
    $Idrecepcion = $_POST["Idrecepcion"];
    $codigo = $_POST["codigo"];
    $nomproducto = $_POST["nomproducto"];
    $observaciones = $_POST["observaciones"];
    $Idempleado = $_POST["Idempleado"];
    $fecha = $_POST["fecha"];
    
    $actualizarrect = "UPDATE recepciontecnica SET Idrecepcion='$Idrecepcion', codigo='$codigo', nomproducto='$nomproducto', 
    observaciones='$observaciones', Idempleado='$Idempleado', fecha='$fecha' WHERE Idrecepcion='$Idrecepcion'";
    $resultadorect = mysqli_query($conn, $actualizarrect);
    if ($resultadorect) {
        echo "<script>alert('Registro actualizado exitosamente'); window.location='recepcion.php';</script>";
        } else {
        echo "Error: " . $actualizarrect . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
?>