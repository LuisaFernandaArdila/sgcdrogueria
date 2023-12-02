<?php
$servername = "localhost";
$username = "root";
$password = "";
$bdsgc = "sgcdrogueria";

$conn = mysqli_connect($servername, $username, $password, $bdsgc);

if (!$conn) {
die("Conexion fallida: " . mysqli_connect_error());
} echo "conexion exitosa";
?>