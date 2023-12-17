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
    <title>Crear producto</title>
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
<h3>REGISTRO NUEVO MEDICAMENTO Y/O DISPOSITIVO M&Eacute;DICO</h3>
<div class="mb-3 row">
    <div class="form-group">

    <form action="aux_producto.php" method="post" class="row g-3 needs-validation" novalidate>

        <div class="col-md-1"></div>
        
        <div class="col-md-5">
        <label for="validationCustom01" class="form-label">Digite el nombre del medicamento y/o dispositivo médico: </label>
        <input type="text" class="form-control" id="validationCustom01" name="nomproducto" placeholder="Ej. Acetaminofen" pattern="[a-zA-Z0-9\s\-]{1,40}" required>
        <div class="invalid-feedback">Por favor, valide nombre del medicamento</div>
        <div class="valid-feedback">Correcto</div>
        </div>
        
        <div class="col-md-5">    
        <label for="validationCustom02" class="form-label">Digite el lote del medicamento y/o dispositivo médico: </label>
        <input type="text" class="form-control" id="validationCustom02" name="lote" pattern="\d{6,10}" placeholder="010101" name="lote" required>
        <div class="invalid-feedback">Por favor, valide lote del medicamento</div>
        <div class="valid-feedback">Correcto</div>
        </div>
        
        <div class="col-md-1"></div>
        <div class="col-md-1"></div>
        
        <div class="col-md-5">
        <label for="validationCustom03" class="form-label">Digite el laboratorio del medicamento y/o dispositivo médico: </label>
        <input type="text" class="form-control" id="validationCustom03" name="laboratorio" placeholder="Colmed" pattern="[a-zA-Z0-9\s\-]{1,40}" required>
        <div class="invalid-feedback">Por favor, valide laboratorio del medicamento</div>
        <div class="valid-feedback">Correcto</div>
        </div>
        
        <div class="col-md-5">
        <label for="validationCustom04" class="form-label">Digite la fecha de vencimiento del medicamento y/o dispositivo médico: </label>
        <input class="form-control" id="validationCustom04" type="date" name="fechavenc" required>
        <div class="invalid-feedback">Por favor, valide la fecha de vencimiento del medicamento</div>
        <div class="valid-feedback">Correcto</div>
        </div>
        
        <center><div class="col-md-1">
        <input type="submit" value="Registrar nuevo producto">
        </div></center>
        
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