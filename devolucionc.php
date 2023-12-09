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
    <title>Formulario devoluci&oacute;n de productos</title>
    <link rel="stylesheet" href="EstiloMP.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
		    <ul><h4>Modulo Recepci&oacute;n y devoluci&oacute;n de productos</h4>
			<li><a href="producto.php">Medicamento y/o dispositivos m&eacute;dicos</a></li>
            <li><a href="recepcion.php">Formulario Control recepci&oacute;n t&eacute;cnica</a></li>
            <li><a href="devolucion.php">Formulario Control devoluci&oacute;n productos</a></li>
			</ul>
            </ol>
        </nav>
    </div>
<main id="contenidos"> 

<center>
<fieldset class="form-group border p-3">
<h3>REGISTRO DEVOLUCION DEL PRODUCTO</h3>
<div class="mb-3 row">
    <div class="form-group">

    <form action="devolucionreg.php" method="post">

        <label for="" class="col-sm-3 col-form-label">Id devoluci&oacute;n</label>
        <input type="hidden" name="Iddevolucion" id=""><br>
        <label for="codigo" class="col-sm-3 col-form-label">Codigo de producto </label>
        <select class="col-sm-3 col-form-label" class="form-select" name="codigo" required>
            <option selected disabled>--Seleccionar producto--</option>
                <?php
                include_once("conexion.php");
                $sql = mysqli_query($conn, "SELECT * FROM producto");
                if($sql!==false){
                while($resultado=mysqli_fetch_assoc($sql)){
                    echo "<option value='".$resultado['codigo']."'style='color:black'>".$resultado['nomproducto']."</option>";
                }}
                ?>
        </select>
        <br>
        <label for="nomproducto" class="col-sm-3 col-form-label">Nombre del producto: </label>
        <select class="col-sm-3 col-form-label" class="form-select" name="nomproducto" required>
            <option selected disabled>--Seleccionar producto--</option>
                <?php
                include_once("conexion.php");
                $sql = mysqli_query($conn, "SELECT * FROM producto");
                if($sql!==false){
                while($resultado=mysqli_fetch_assoc($sql)){
                    echo "<option value='".$resultado['codigo']."'style='color:black'>".$resultado['nomproducto']."</option>";
                }}
                ?>
        </select>
        <br>
        <label for="" class="col-sm-3 col-form-label">Digite el motivo de la devolucion del producto: </label>
        <input type="text" name="motivodevolucion" id="" required><br>
        <label for="Idempleados" class="col-sm-3 col-form-label">Id empleados: </label>
        <select class="col-sm-3 col-form-label" class="form-select" name="Idempleados" required>
            <option selected disabled>--Seleccionar empleado--</option>
                <?php
                include_once("conexion.php");
                $sql = mysqli_query($conn, "SELECT * FROM empleados");
                if($sql!==false){
                while($resultado=mysqli_fetch_assoc($sql)){
                    echo "<option value='".$resultado['Idempleados']."'style='color:black'>".$resultado['nomempleado']."</option>";
                }}
                ?>
        </select>
        <br>
        <label for="" class="col-sm-3 col-form-label">Digite la fecha información: </label>
        <input type="date" name="fecha" id="" required><br><br>
        <input type="submit" value="Registrar datos">
    </form>
</fieldset>
</center>
<br>

    <form action="devolucion.php">
        <button type="submit">Volver</button>
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