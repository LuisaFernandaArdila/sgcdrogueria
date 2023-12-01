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
    $codigo = $_POST["codigo"];
    $nomproducto = $_POST["nomproducto"];
    $lote = $_POST["lote"];
    $laboratorio = $_POST["laboratorio"];
    $fechavenc = $_POST["fechavenc"];
        
    $sql = "INSERT INTO producto (codigo, nomproducto, lote, laboratorio, fechavenc)
    VALUES ('$codigo', '$nomproducto', '$lote', '$laboratorio', '$fechavenc')";
    if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Nuevo registro almacenado exitosamente'); window.location='moduloproducto.php';</script>";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>