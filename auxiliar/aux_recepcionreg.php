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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<header id="header">
<img src="imagen/LogoSGC.png" align="left" height="100">
		<h2>Drogueria punto express</h2>
        <br>
			<div id="superior">
            
                <a id="inicio" href="http://localhost/sgcdrogueria/u_auxiliar.php">Inicio</a>
                <a id="superior1" href="aux_resolucion1407.php">Resoluci&oacute;n 1407</a>
                <a id="superior1" href="aux_sistemainf.php">Informaci&oacute;n del sistema</a>
                <a id="cerrar" href="http://localhost/sgcdrogueria/u_cerrarsesion.php">Cerrar sesi&oacute;n</a>
            
</header>
<div id="contenido">

    <div id="lateral">
        <br>
        <nav>
            <ol>
		    <ul><h4>Modulo Recepci&oacute;n y devoluci&oacute;n de productos</h4>
			<li><a href="aux_productoreg.php">Ingresar nuevos medicamento y/o dispositivo m&eacute;dico</a></li>
            <li><a href="aux_recepcionreg.php">Nuevo registro: Formulario Control recepci&oacute;n t&eacute;cnica</a></li>
            <li><a href="aux_devolucionreg.php">Nuevo registro: Formulario Control devoluci&oacute;n productos</a></li>
			</ul>
            </ol>
        </nav>
    </div>
<main id="contenidos"> 

<center>
<fieldset class="form-group border p-3">
<h3>REGISTRO RECEPCIÓN DE PRODUCTOS</h3>c
<div class="mb-3 row">
    <div class="form-group">

    <form action="aux_recepcion.php" method="post">

        <label for="" class="col-sm-3 col-form-label">Id recepci&oacute;n t&eacute;cnica</label>
        <input type="hidden" name="Idrecepcion" id=""><br>
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
        <label for="" class="col-sm-3 col-form-label">Digite las observaciones del producto: </label>
        <input type="text" name="observaciones" id="" required><br>
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
        <input type="submit" value="Registrar recepci&oacute;n productos">
    </form>
</fieldset>
</center>
    <br>
    <form action="http://localhost/sgcdrogueria/auxiliar/moduloproducto.php">
        <button type="submit">Volver</button>
        </form>
    <br>
   
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