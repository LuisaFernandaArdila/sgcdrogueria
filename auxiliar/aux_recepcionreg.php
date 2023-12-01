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
    <title>Formulario recepci&oacute;n t&eacute;cnica</title>
    <link rel="stylesheet" href="EstiloMP.css">
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
		    <ul><h4>Modulo Recepci&oacute;n y devoluci&oacute;n</h4>
			<li><a href="aux_productoreg.php">Ingreso nuevos productos</a></li>
            <li><a href="aux_recepcionreg.php">Nuevo registro: Formulario Control recepci&oacute;n t&eacute;cnica</a></li>
            <li><a href="aux_devolucionreg.php">Nuevo registro: Formulario Control devoluci&oacute;n productos</a></li>
			</ul>
            </ol>
        </nav>
    </div>
<main id="contenidos"> 

    <form action="aux_recepcion.php" method="post">

        <label for="">Id recepci&oacute;n t&eacute;cnica</label>
        <input type="hidden" name="Idrecepcion" id=""><br>
        <label for="">Codigo de producto </label>
        <input type="text" name="codigo" id=""><br>
        <label for="">Digite el nombre del producto: </label>
        <input type="text" name="nomproducto" id=""><br>
        <label for="">Digite las observaciones del producto: </label>
        <input type="text" name="observaciones" id=""><br>
        <label for="">Digite el Id empleados: </label>
        <input type="text" name="Idempleados" id=""><br>
        <label for="">Digite la fecha información: </label>
        <input type="date" name="fecha" id=""><br>
        <input type="submit" value="Registrar recepci&oacute;n productos">
    </form>
    <br>
    <form action="http://localhost/sgcdrogueria/auxiliar/moduloatencion.php">
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