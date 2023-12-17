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
    <title>Persona</title>
    <link rel="stylesheet" href="EstiloMP.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
</head>
<body>
    
<header id="header">

        
            <img src="imagen/LogoSGC.png" align="left" height="100">
            <h2>Droguería Punto Express</h2>
<br>
    <div id="superior">
            <a id = "inicio" href="u_inicio.php">Inicio</a>
           <a id = "superior1" href="u_resolucion1407.php">Resolución 1407</a>
            <a id= "superior1" href="u_sistemainf.php">Información del sistema</a>
            <a id="cerrar" href="u_cerrarsesion.php">Cerrar sesión</a>


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
		    <ul><h4>Modulo Recepci&oacute;n y devoluci&oacute;n de medicamentos</h4>
			<li><a href="producto.php">Medicamento y/o dispositivos m&eacute;dicos</a></li>
            <li><a href="recepcion.php">Formulario Control recepci&oacute;n t&eacute;cnica medicamentos</a></li>
            <li><a href="devolucion.php">Formulario Control devoluci&oacute;n medicamentos</a></li>
			</ul>
            </ol>
        </nav>
    </div>
<main id="contenidos"> 

<?php
include_once ("conexion.php");
$sql = "SELECT * FROM persona";
?>
<table id="persona">
<thead>
<tr>
<th>Cedula</th>
<th>Nombre</th>
<th>Telefono</th>
<th>Direccion</th>
<th>Actualizar</th>
<th>Eliminar</th>
</tr>
</thead>
<tbody>
<?php
$resultado = mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($resultado)){?>
        <tr>
        <td><?php echo $row ["cedula"];?></td>
        <td><?php echo $row ["nombre"];?></td>
        <td><?php echo $row ["telefono"];?></td>
        <td><?php echo $row ["direccion"];?></td>
        <td><a href="pdactualizar.php?cedula=<?php echo $row ["cedula"];?>">Actualizar</a></td>
        <td><a href="ppeliminar.php?cedula=<?php echo $row ["cedula"];?>">Eliminar</a></td>
        </tr>
<?php    }
    mysqli_close($conn);
?>
</tbody>
<tfoot>
<tr>
<th>Cedula</th>
<th>Nombre</th>
<th>Telefono</th>
<th>Direccion</th>
<th>Actualizar</th>
<th>Eliminar</th>
</tr>
</tfoot>
</table>
<br>
<center>
<form action="personaregu.php" method="post">
<button type="submit">Registrar nueva persona</button>
</form>
</center>
<br>
<form action="u_inicio.php">
<button type="submit">Volver</button>
</form>
<br>

</main>
</div>
<footer id="footer">
      
        <table id="inferior"><tr>
			<td id="inferior1">Direcci&oacute;n: Cra 101 No. 25 - 45</td>
			<td id="inferior1">Tel&eacute;fono: 601 745 7898</td>
			<td id="inferior1">E-mail:<a href="mailto:drogueriapuntoexpress@gmail.com">drogueriapuntoexpress@gmail.com</a></td>
</table>
       
</footer>

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>

<script>
        $(document).ready(function() {
    $('#persona').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'excel', 'pdf', 'print'
        ]
    } );
} );
</script>
</body>
</html>