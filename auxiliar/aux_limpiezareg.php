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

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario control de limpieza</title>
    <link rel="stylesheet" href="EstiloMP.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<header id="header">
        <img src="imagen/LogoSGC.png" ver ="left" height="117" width="150"/>
		<h2>Drogueria punto express</h2>
			<table id="superior"><tr>
            <td id="superior1"><a href="http://localhost/sgcdrogueria/u_cerrarsesion.php">Cerrar sesi&oacute;n</a></td>
            <td id="superior1"><a href="http://localhost/sgcdrogueria/u_auxiliar.php">Inicio</a></td>
            <td id="superior1"><a href="aux_resolucion1407.php">Resoluci&oacute;n 1407</a></td>
            <td id="superior1"><a href="aux_sistemainf.php">Informaci&oacute;n del sistema</a></td>
            </tr></table>
</header>

<div id="contenido">

    <div id="lateral">
        <nav>
            <ol>
		    <ul><h4>Modulo Entorno</h4>
			<li><a href="aux_limpiezareg.php">Nuevo registro: Formulario Control de limpieza</a></li>
            <li><a href="aux_residuosreg.php">Nuevo registro: Formulario Control de residuos</a></li>
			<li><a href="aux_temperaturareg.php">Nuevo registro: Formulario Control temperatura y humedad</a></li>
			</ul>
            </ol>
        </nav>
    </div>
<main id="contenidos"> 

<form action="aux_limpieza.php" method="post">

<label for="">Id limpieza</label>
<input type="hidden" name="Idlimpieza" id=""><br>
<label for="">Digite el producto de aseo: </label>
<input type="text" name="productoaseo" id="" required><br>
<label for="">Digite la zona de aseo: </label>
<input type="text" name="zona" id="" required><br>
<label for="">Informaci&oacute;n proceso de limpieza: </label>
<input type="text" name="infoprocesolimpieza" id="" required><br>
<label for="">Digite el Id empleados: </label>
<input type="text" name="Idempleados" id="" required placeholder="E1"><br>
<label for="">Digite la fecha informaci&oacute;n: </label>
<input type="date" name="fecha" id="" required><br>
<input type="submit" value="Registrar proceso limpieza">
</form>

    <br>
    <form action="http://localhost/sgcdrogueria/auxiliar/moduloentorno.php">
        <button type="submit">Volver</button>
    </form> <br>
   
</main>
</div>
<footer id="footer">
      <center>
        <table id="inferior"><tr>
			<td id="inferior1">Direcci&oacute;n: Cra 101 No. 25 - 45</td>
			<td id="inferior1">Tel&eacute;fono: 601 745 7898</td>
			<td id="inferior1">E-mail:<a href="mailto:drogueriapuntoexpress@gmail.com">drogueriapuntoexpress@gmail.com</a></td>
		</tr></table>
       </center>
</footer>
</body>
</html>