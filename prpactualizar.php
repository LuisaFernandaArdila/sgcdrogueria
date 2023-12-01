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
    
    $actualizarprod = "UPDATE producto SET codigo='$codigo', nomproducto='$nomproducto', lote='$lote', 
    laboratorio='$laboratorio', fechavenc='$fechavenc' WHERE codigo='$codigo'";
    $resultadoprod = mysqli_query($conn, $actualizarprod);
    if ($resultadoprod) {
        echo "<script>alert('Registro actualizado exitosamente'); window.location='producto.php';</script>";
        } else {
        echo "Error: " . $actualizarprod . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
?>