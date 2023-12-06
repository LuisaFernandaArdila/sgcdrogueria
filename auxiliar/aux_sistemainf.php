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
    <title>Resolucion 1407</title>
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
<div id="contenido1">


<main id="contenidos">
<h3>Objetivo General del sistema</h3>
Diseñar un sistema de información para garantizar el cumplimiento de la normatividad exigida en la 
resolución 1403 del 2007 capítulo IV sistema de gestión de calidad en una droguería.</h3>

<h3>Objetivos Específicos del del sistema</h3>
<ul>
<li>Diseñar los formularios digitales que serán diligenciados para llevar el control de los clientes 
    de la droguería, cumpliendo con la política de calidad y manual de gestión de calidad exigidos por 
    la resolución 1403 del 2007.</li>
<li>Implementar un módulo que permita llevar un control de las condiciones del entorno en una farmacia, 
    según la normatividad vigente.</li>
<li>Registrar la validación de la información de todos los medicamentos e insumos médicos, para verificar
    que se cumplan los estándares de calidad.</li>
</ul>
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