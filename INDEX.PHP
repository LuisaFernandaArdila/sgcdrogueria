<?php
session_start();
if(isset($_SESSION['usuario'])){
    header("location: INDEX.PHP");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
    <link rel="stylesheet" href="EstiloMP.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<header id="header">

    
    <img src="imagen/LogoSGC.png" align="left" height="100">
		<h2>Drogueria punto express</h2> 
        <br>
			<div id="superior">
            <a id="inicio" href="INDEX.php">Inicio</a>
			<a id="superior1" href="indexres1407.html">Resolución 1407</a>
			<a id="superior1" href="indexsisinf.html">Información del sistema</a>
            <a id="login" href="u_login.html">Login</a>
        
</header>

<div id="contenido1">
<main id="contenidos">

<h1>Bienvenido al sistema de gestion de calidad</h1><br>

<p>Para nuestra compañia es muy importante cumplir con las normas del gobierno y garantiar su seguridad y la de cada persona que use
   nuestros servicios y productos; al igual que el personal que labora en nuestra compañia, por eso lo invitamos a navegar por
   nuestra pagina web para conocer el programa de gestion de calidad.
</p><br>

<form id="" action="scpersonainf.html" method="post">
<p>Puede dejarnos sus comentarios y/o sugerencias en nuestra encuesta de safisfaccion de cliente.<br /><br>
<button type="submit">Encuesta Satisfacción al cliente</button>
</p>
<p>Para quejas y reclamos puede dearlos en el siguiente formulario y nuestro personal lo contactara para dar pronta respuesta.<br /><br>
<button type="submit">Quejas y/o Reclamos</button>
</p>
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