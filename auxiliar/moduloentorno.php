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
    <title>Modulo Entorno</title>
    <link rel="stylesheet" href="EstiloMP.css">
</head>
<body>j
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

<h1>Bienvenido al sistema de gesti&oacute;n de calidad</h1>
<h3>Modulo Entorno</h3>
<p>En este men&uacute;, el cargo de auxiliar puede:
    <ol>
        <li>Registrar el proceso de limpieza del establecimiento.</li>
        <li>Registrar la cantidad y tipo de residuos recolectados en el establecimiento.</li>
        <li>Registrar los cambios de temperatura y humedad en dos jornada (mañana y tarde), en el establecimiento.</li>
    </ol> 
</p>
<br />
<form action="http://localhost/sgcdrogueria/u_auxiliar.php">
<button type="submit">Volver</button>
</form>
<br>
<form action="http://localhost/sgcdrogueria/u_cerrarsesion.php">
<button type="submit">Salir</button>
</form>
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