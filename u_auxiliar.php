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
    <title>Inicio</title>
    <link rel="stylesheet" href="EstiloMP.css">
</head>
<body>
<header id="header">
        <img src="imagen/LogoSGC.png" ver ="left" height="117" width="150"/>
		<h2>Drogueria punto express</h2>
			<table id="superior"><tr>
			<td id="superior1"><a href="u_cerrarsesion.php">Cerrar sesi&oacute;n</a></td>
            <td id="superior1"><a href="u_inicio.php">Inicio</a></td>
			<td id="superior1"><a href="auxiliar/aux_resolucion1407.php">Resoluci&oacute;n 1407</a></td>
			<td id="superior1"><a href="auxiliar/aux_sistemainf.php">Informaci&oacute;n del sistema</a></td>
            </tr></table>
</header>
<div id="contenido">

<div id="lateral">
        <nav>
            <ol>
		    <ul><h4>Modulo Atenci&oacute;n Al Cliente</h4>
			</ul>
            </ol>
        </nav>
        <nav>
            <ol>
		    <ul><h4>Modulo Entorno</h4>
			</ul>
            </ol>
        </nav>
        <nav>
            <ol>
		    <ul><h4>Modulo Recepci&oacute;n y devoluci&oacute;n</h4>
			</ul>
            </ol>
        </nav>
</div>
<main id="contenidos">    

<h1>Bienvenido al sistema de gesti&oacute;n de calidad</h1>
<p>Este es el menú principal para el usuario con el cargo de auxiliar.</p>

<center><table>
    <tr>
        <td>
        <a href="auxiliar/moduloatencion.php"><img src="auxiliar/imagen/atencion.jpg" alt="Modulo atencion al cliente" height="70" width="70"></a>
        </td>
        <td>
        <a href="auxiliar/moduloentorno.php"><img src="auxiliar/imagen/entorno.jpg" alt="Modulo Entorno" height="70" width="70"></a>
        </td>
        <td>
        <a href="auxiliar/moduloproducto.php"><img src="auxiliar/imagen/producto.jpg" alt="Modulo Recepcion y devoluciones" height="70" width="70"></a>
        </td>
    </tr>
    <tr>
        <td>
            <label for="">Modulo atenci&oacute;n al cliente</label></td>
        <td>
            <label for="">Modulo Entorno</label></td>
        <td>
            <label for="">Modulo Recepci&oacute;n y devoluciones</label></td>
    </tr>
</table></center>
<br />
<form action="u_cerrarsesion.php">
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