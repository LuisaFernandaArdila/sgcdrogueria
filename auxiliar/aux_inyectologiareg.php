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
    <title>Formulario Inyectolog&iacute;a</title>
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
		    <ul><h4>Modulo Atenci&oacute;n al Cliente</h4>
            <li><a href="aux_personareg.php">Registre un nuevo paciente</a></li>
			<li><a href="aux_educacionreg.php">Nuevo registro: Formulario Control educaci&oacute;n al paciente</a></li>
			<li><a href="aux_inyectologiareg.php">Nuevo registro: Formulario Control pacientes de inyectolog&iacute;a</a></li>

			</ul>
            </ol>
        </nav>
    </div>
<main id="contenidos"> 


<center>
<fieldset class="form-group border p-3">
<h3>REGISTRO INYECTOLOGÍA DEL PACIENTE</h3>
<div class="mb-3 row">
    <div class="form-group">

    <form action="aux_inyectologia.php" method="post">

        <label for="" class="col-sm-3 col-form-label">Id Educaci&oacute;n Paciente</label>
        <input type="hidden" name="Idinyectologia" id=""><br>
        <label for="" class="col-sm-3 col-form-label">Digite la cedula del paciente: </label>
        <input type="text" name="cedulacliente" id="" required><br>
        <label for="" class="col-sm-3 col-form-label">Digite el nombre del paciente: </label>
        <input type="text" name="nomcliente" id="" required><br>
        <label for="" class="col-sm-3 col-form-label">Digite el codigo del producto: </label>
        <input type="text" name="codigo" id="" required><br>
        <label for="" class="col-sm-3 col-form-label">Digite el nombre del producto: </label>
        <input type="text" name="nomproducto" id="" required><br>
        <label for="" class="col-sm-3 col-form-label">Digite el gl&uacute;teo aplicaci&oacute;n: </label>
        <input type="text" name="gluteoaplicacion" id="" required><br>
        <label for="" class="col-sm-3 col-form-label">Digite el Id empleados: </label>
        <input type="text" name="Idempleados" id="" required placeholder="E1"><br>
        <label for="" class="col-sm-3 col-form-label">Digite la fecha informaci&oacute;n: </label>
        <input type="date" name="fecha" id="" required><br><br>
        <input type="submit" value="Registrar paciente">
    </form>
    <fieldset>
</center>
<br>

    <form action="http://localhost/sgcdrogueria/auxiliar/moduloatencion.php">
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