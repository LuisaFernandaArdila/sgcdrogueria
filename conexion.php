<?php
$servername = "localhost";
$username = "id21644768_arlex2407";
$password = "Mugiwara1*";
$bdsgc = "id21644768_sgcdrogueria";

$conn = mysqli_connect($servername, $username, $password, $bdsgc);

if (!$conn) {
die("Conexion fallida: " . mysqli_connect_error());
}
?>