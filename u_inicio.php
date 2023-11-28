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
        <img src="LogoSGC.png" ver ="left" height="117" width="150"/>
		<h2>Drogueria punto express</h2>
			<table id="superior"><tr>
			<td id="superior1"><a href="u_login.php">Login</a></td>
            <td id="superior1"><a href="u_inicio.php">Inicio</a></td>
			<td id="superior1"><a href="u_resolucion1407.php">Resolución 1407</a></td>
			<td id="superior1"><a href="u_sistemainf.php">Información del sistema</a></td>
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
		    <ul><h4>Modulo Recepci&oacute;n y devoluci&oacute;n</h4>
			<li><a href="producto.php">Inventario de productos</a></li>
            <li><a href="recepcion.php">Formulario Control recepci&oacute;n t&eacute;cnica</a></li>
            <li><a href="devolucion.php">Formulario Control devoluci&oacute;n productos</a></li>
			</ul>
            </ol>
        </nav>
</div>
<main id="contenidos">    

<h1>Bienvenido al sistema de gestion de calidad</h1>
<p>Este es el menú principal donde tiene acceso a la creacion de usuarios y asignación de empleados.</p>

<center><table>
    <tr>
        <td>
        <a href="persona.php"><img src="verde.jpg" alt="persona" height="70" width="70"></a>
        </td>
        <td>
        <a href="empleados.php"><img src="verde1.jpg" alt="persona" height="70" width="70"></a>
        </td>
    </tr>
    <tr>
        <td>
            <label for="">Personas</label>
        <td>
            <label for="">Empleados</label>
    </tr>
</table></center>
<br />
<form action="u_login.php">
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