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
    <title>Formulario control de residuos</title>
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
		    <ul><h4>Modulo Entorno</h4>
			<li><a href="aux_limpiezareg.php">Nuevo registro: Formulario Control de limpieza</a></li>
            <li><a href="aux_residuosreg.php">Nuevo registro: Formulario Control de residuos</a></li>
			<li><a href="aux_temperaturareg.php">Nuevo registro: Formulario Control temperatura y humedad</a></li>
			</ul>
            </ol>
        </nav>
    </div>
<main id="contenidos"> 

<center>
<fieldset class="form-group border p-3">
<h3>REGISTRO CONTROL DE RESIDUOS</h3>
<div class="mb-3 row">
    <div class="form-group">

    <form action="aux_residuos.php" method="post">

        <label for="" class="col-sm-3 col-form-label">Id residuos</label>
        <input type="hidden" name="Idresiduos" id=""><br>
        <label for="" class="col-sm-3 col-form-label">Digite la fecha información: </label>
        <input type="date" name="fecha" id="" required><br>
        <label for="" class="col-sm-3 col-form-label">Digite el tipo residuo: </label>
        <input type="text" name="tiporesiduo" id="" required><br>
        <label for="" class="col-sm-3 col-form-label">Digite la cantidad residuos: </label>
        <input type="text" name="cantidad" id="" required placeholder="Kg"><br>
        <label for="" class="col-sm-3 col-form-label">Informacion generación de residuos: </label>
        <input type="text" name="infogeneracionresiduos" id="" required><br>
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

        <input type="submit" value="Registrar residuos">
    </form>
</fieldset>
</center>
<br>

    <form action="http://localhost/sgcdrogueria/auxiliar/moduloentorno.php">
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