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
    <title>Formulario Educaci&oacute;n al paciente</title>
    <link rel="stylesheet" href="EstiloMP.css">
</head>
<body>

<header id="header">
        <img src="imagen/LogoSGC.png" ver ="left" height="117" width="150"/>
		<h2>Drogueria punto express</h2>
			<table id="superior"><tr>
                <td id="superior1"><a href="u_cerrarsesion.php">Cerrar sesi&oacute;n</a></td>
                <td id="superior1"><a href="u_inicio.php">Inicio</a></td>
                <td id="superior1"><a href="u_resolucion1407.php">Resoluci&oacute;n 1407</a></td>
                <td id="superior1"><a href="u_sistemainf.php">Informaci&oacute;n del sistema</a></td>
            </tr></table>
</header>

<div id="contenido">

    <div id="lateral">
        <nav>
            <ol>
		    <ul><h4>Modulo Atenci&oacute;n Al Cliente</h4>
			<li><a href="educacion.php">Formulario Control educaci&oacute;n al paciente</a></li>
			<li><a href="inyectologia.php">Formulario Control pacientes de inyectolog&iacute;a</a></li>
            <li><a href="rencuesta.php">Registro encuesta de satisfacci&oacute;n al cliente</a></li>
            <li><a href="qr.php">Registro quejas y reclamos</a></li>
			</ul>
            </ol>
        </nav>
        <nav>
            <ol>
		    <ul><h4>Modulo Entorno</h4>
			<li><a href="limpieza.php">Formulario Control de limpieza</a></li>
            <li><a href="residuos.php">Formulario Control de residuos</a></li>
			<li><a href="temperatura.php">Formulario Control temperatura y humedad</a></li>
            <li><a href="auditoria.php">Auditoria Interna</a></li>
			</ul>
            </ol>
        </nav>
        <nav>
            <ol>
		    <ul><h4>Modulo Recepci&oacute;n y devoluci&oacute;n de productos</h4>
			<li><a href="producto.php">Inventario de productos</a></li>
            <li><a href="recepcion.php">Formulario Control recepci&oacute;n t&eacute;cnica</a></li>
            <li><a href="devolucion.php">Formulario Control devoluci&oacute;n productos</a></li>
			</ul>
            </ol>
        </nav>
    </div>
<main id="contenidos"> 

    <form action="educacionreg.php" method="post">

        <label for="">Id Educacion Paciente</label>
        <input type="hidden" name="Ideducacionpac" id=""><br>
        <label for="">Digite la cedula del paciente: </label>
        <input type="text" name="cedula" id=""><br>
        <label for="">Digite el nombre del paciente: </label>
        <input type="text" name="nomcliente" id=""><br>
        <label for="">Digite el codigo del producto: </label>
        <input type="text" name="codigo" id=""><br>
        <label for="">Digite el nombre del producto: </label>
        <input type="text" name="nomproducto" id=""><br>
        <label for="">Digite las contraindicaciones: </label>
        <input type="text" name="contraindicaciones" id=""><br>
        <label for="">Digite el Id empleados: </label>
        <input type="text" name="Idempleados" id=""><br>
        <label for="">Digite la fecha informaci&oacute;n: </label>
        <input type="date" name="fecha" id=""><br>
        <input type="submit" value="Crear registro">
    </form>
    <form action="educacion.php">
        <button type="submit">Volver</button>
        </form>
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