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

    $productoaseo = $_POST["productoaseo"];
    $zona = $_POST["zona"];
    $infoprocesolimpieza = $_POST["infoprocesolimpieza"];
    $Idempleados = $_POST["Idempleados"];
    $fecha = $_POST["fecha"];
        
    $limpieza = "INSERT INTO limpieza (productoaseo, zona, infoprocesolimpieza, Idempleados, fecha)
    VALUES ('$productoaseo', '$zona', '$infoprocesolimpieza', '$Idempleados', '$fecha')";
    if (mysqli_query($conn, $limpieza)) {
    echo "<script>alert('Nuevo registro almacenado exitosamente'); window.location='limpieza.php';</script>";
    } else {
    echo "Error: " . $limpieza . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>