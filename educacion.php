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
        <img src="LogoSGC.png" ver ="left" height="117" width="150"/>
		<h2>Drogueria punto express</h2>
			<table id="superior"><tr>
			<td id="superior1"><a href="u_login.php">Login</a></td>
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
$educacion = "SELECT * FROM educacionpaciente";
?>
<table>
<tr>
<th>Id Educacion Paciente</th>
<th>Cedula del Paciente</th>
<th>Nombre del Paciente</th>
<th>Codigo del Producto</th>
<th>Nombre del Producto</th>
<th>Contraindicaciones</th>
<th>Id Empleados</th>
<th>Fecha Informaci&oacute;n</th>
<th>Actualizar</th>
<th>Eliminar</th>
</tr>
<?php
$resultadoedu = mysqli_query($conn,$educacion);
while($row=mysqli_fetch_assoc($resultadoedu)){?>
        <tr>
        <td><?php echo $row ["Ideducacionpac"];?></td>
        <td><?php echo $row ["cedula"];?></td>
        <td><?php echo $row ["nomcliente"];?></td>
        <td><?php echo $row ["codigo"];?></td>
        <td><?php echo $row ["nomproducto"];?></td>
        <td><?php echo $row ["contraindicaciones"];?></td>
        <td><?php echo $row ["Idempleados"];?></td>
        <td><?php echo $row ["fecha"];?></td>
        <td><a href="eddactualizar.php?Ideducacionpac=<?php echo $row ["Ideducacionpac"];?>">Actualizar</a></td>
        <td><a href="edeliminar.php?Ideducacionpac=<?php echo $row ["Ideducacionpac"];?>">Eliminar</a></td>
        </tr>
<?php    }
    mysqli_close($conn);
?>
<form action="educacion.html" method="post">
<button type="submit">Crear</button>
</form>
<form action="u_inicio.php">
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