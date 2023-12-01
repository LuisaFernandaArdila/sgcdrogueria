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
    <title>Crear Persona</title>
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
		    <ul><h4>Modulo Atenci&oacute;n al Cliente</h4>
            <li><a href="aux_personareg.php">Registre un nuevo paciente</a></li>
			<li><a href="aux_educacionreg.php">Nuevo registro: Formulario Control educaci&oacute;n al paciente</a></li>
			<li><a href="aux_inyectologiareg.php">Nuevo registro: Formulario Control pacientes de inyectolog&iacute;a</a></li>
			</ul>
            </ol>
        </nav>
    </div>
<main id="contenidos"> 

    <form action="aux_paciente.php" method="post">

        <label for="">Digite la cedula de la persona: </label>
        <input type="text" name="cedula" id=""><br>
        <label for="">Digite el nombre de la persona: </label>
        <input type="text" name="nombre" id=""><br>
        <label for="">Digite el telefono de la persona: </label>
        <input type="text" name="telefono" id=""><br>
        <label for="">Digite la direccion de la persona: </label>
        <input type="text" name="direccion" id=""><br>
        <input type="submit" value="Registrar paciente">
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