<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persona</title>
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

<?php
include_once ("conexion.php");
$Iddevolucion = $_GET['Iddevolucion'];
$sql = "SELECT * FROM devolucion WHERE Iddevolucion = '$Iddevolucion'";
?>
<form action="devactualizar.php" method="post">
<table>
<tr>
<th>Id devoluci&oacute;n</th>
<th>Codigo Producto</th>
<th>Nombre Producto</th>
<th>Motivo devolución del Producto</th>
<th>Id empleados</th>
<th>Fecha información</th>
</tr>
<?php
$resultado = mysqli_query($conn, $sql);
while($row=mysqli_fetch_assoc($resultado)){?>
        <tr>
        <td><input type="text" name="Iddevolucion"value="<?php echo $row ["Iddevolucion"];?>"></td>
        <td><input type="text" name="codigo"value="<?php echo $row ["codigo"];?>"></td>
        <td><input type="text" name="nomproducto"value="<?php echo $row ["nomproducto"];?>"></td>
        <td><input type="text" name="motivodevolucion"value="<?php echo $row ["motivodevolucion"];?>"></td>
        <td><input type="text" name="Idempleados"value="<?php echo $row ["Idempleados"];?>"></td>
        <td><input type="date" name="fecha"value="<?php echo $row ["fecha"];?>"></td>
        </tr>
        <input type="submit" value="Actualizar">
<?php    }
    mysqli_close($conn);
?>
</form>
<form action="devolucion.php">
<button type="submit">Volver</button>
</form>
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