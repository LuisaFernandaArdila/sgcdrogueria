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
<img src="../imagen/LogoSGC.png" align="left" height="100">
		<h2>Drogueria punto express</h2>
        <br>
			<div id="superior">
            
                <a id="inicio" href="../u_auxiliar.php">Inicio</a>
                <a id="superior1" href="aux_resolucion1407.php">Resoluci&oacute;n 1407</a>
                <a id="superior1" href="aux_sistemainf.php">Informaci&oacute;n del sistema</a>
                <a id="cerrar" href="../u_cerrarsesion.php">Cerrar sesi&oacute;n</a>
            
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
<h3>REGISTRO RECEPCI&Oacute;N DE MEDICAMENTOS Y/O DISPOSITIVOS MÉDICOS</h3>
<div class="mb-3 row">
    <div class="form-group">

    <form action="aux_recepcion.php" method="post" class="row g-3 needs-validation" novalidate onsubmit='return validar();'>

        <div class="col-md-1"></div>
        
        <div class="col-md-5">
        <label for="validationCustom01" class="form-label">Codigo de producto </label>
        <select class="form-select" id="validationCustom01" name="codigo" required>
            <option selected disabled value="">--Seleccionar producto--</option>
                <?php
                include_once("../conexion.php");
                $sql = mysqli_query($conn, "SELECT * FROM producto");
                if($sql!==false){
                while($resultado=mysqli_fetch_assoc($sql)){
                    echo "<option value='".$resultado['codigo']."'style='color:black'>".$resultado['nomproducto']."</option>";
                }}
                ?>
        </select>
        <div class="invalid-feedback">Por favor, seleccione el medicamento</div>
        <div class="valid-feedback">Correcto</div>
        </div>
        
        <br>
        <div class="col-md-5">
        <label for="validationCustom02" class="form-label">Nombre del producto: </label>
        <select class="form-select" id="validationCustom02" name="nomproducto" required>
            <option selected disabled value="">--Seleccionar producto--</option>
                <?php
                include_once("../conexion.php");
                $sql = mysqli_query($conn, "SELECT * FROM producto");
                if($sql!==false){
                while($resultado=mysqli_fetch_assoc($sql)){
                    echo "<option value='".$resultado['codigo']."'style='color:black'>".$resultado['nomproducto']."</option>";
                }}
                ?>
        </select>
        <div class="invalid-feedback">Por favor, seleccione nombre del medicamento</div>
        <div class="valid-feedback">Correcto</div>
        </div>
        
        <div class="col-md-1"></div>
        <div class="col-md-1"></div>
        
        <br>
        <div class="col-md-10">
        <label for="validationCustom03" class="form-label">Digite las observaciones del producto: </label>
        <input type="text" class="form-control" id="validationCustom03" name="observaciones" placeholder="Ej. Sin caja" required>
        <div class="invalid-feedback">Por favor, digite las observaciones</div>
        <div class="valid-feedback">Correcto</div>
        </div>        
        
        <div class="col-md-1"></div>
        <div class="col-md-1"></div>
        
        <br>
        <div class="col-md-5">
        <label for="validationCustom04" class="form-label">Id empleados: </label>
        <select class="form-select" id="validationCustom04" name="Idempleados" required>
            <option selected disabled value="">--Seleccionar empleado--</option>
                <?php
                include_once("../conexion.php");
                $sql = mysqli_query($conn, "SELECT * FROM empleados");
                if($sql!==false){
                while($resultado=mysqli_fetch_assoc($sql)){
                    echo "<option value='".$resultado['Idempleados']."'style='color:black'>".$resultado['nomempleado']."</option>";
                }}
                ?>
        </select>
        <div class="invalid-feedback">Por favor, seleccione el empleado</div>
        <div class="valid-feedback">Correcto</div>
        </div>
        
        <br>
        <div class="col-md-5">
        <label for="validationCustom05" class="form-label">Digite la fecha información: </label>
        <input type="date" name="fecha" class="form-control" id="validationCustom05" required>
        <div class="invalid-feedback">Por favor, selecione la fecha</div>
        <div class="valid-feedback">Correcto</div>
        </div>
        <br>
        
        <div class="col-md-11">
        <input type="submit" value="Registrar recepci&oacute;n productos">
        </div>
        
    </form>
</fieldset>
</center>
    <br>
    <form action="moduloproducto.php">
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

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>
</body>
</html>