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
    <title>Registrar Persona</title>
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
		    <ul><h4>Modulo Recepci&oacute;n y devoluci&oacute;n de medicamentos</h4>
			<li><a href="producto.php">Medicamento y/o dispositivos m&eacute;dicos</a></li>
            <li><a href="recepcion.php">Formulario Control recepci&oacute;n t&eacute;cnica medicamentos</a></li>
            <li><a href="devolucion.php">Formulario Control devoluci&oacute;n medicamentos</a></li>
			</ul>
            </ol>
        </nav>
    </div>
<main id="contenidos"> 

<center>
<div class="mb-3 row">
<fieldset class="form-group border p-3">
<h3>REGISTRO NUEVA PERSONA</h3>
<br>
    <div class="form-group">

<form action="personareg.php" method="post" class="row g-3 needs-validation" novalidate onsubmit='return validar();'>
    
    <div class="col-md-1"></div>
    
        <div class="col-md-5">
        <label for="validationCustom01" class="form-label">Digite la cedula de la persona: </label>
        <input type="text" class="form-control" id="validationCustom01" maxlength="10" pattern="\d{6,10}" placeholder="Ej. 1123123123" required name="cedula"><br>
            <div class="invalid-feedback">
            Por favor, valide la cedula
            </div>
            <div class="valid-feedback">
            Correcto
            </div>
        </div>
        
        <div class="col-md-5">
        <label for="validationCustom02" class="form-label">Digite el nombre de la persona: </label>
        <input type="text" class="form-control" id="validationCustom02" name="nombre" pattern="[a-zA-ZÀ-ÿ\s]{1,40}" placeholder="Ej. Maria Perez" required><br>
            <div class="invalid-feedback">
            Por favor, valide el nombre
            </div>
            <div class="valid-feedback">
            Correcto
            </div>
        </div>
        
        <div class="col-md-1"></div>
        <div class="col-md-1"></div>
        
        <div class="col-md-5">
        <label for="validationCustom03" class="form-label">Digite el telefono de la persona: </label>
        <input type="text" class="form-control" id="validationCustom03" maxlength="10" pattern="\d{7,10}" placeholder="Ej. 3144564323" name="telefono" required><br>
            <div class="invalid-feedback">
            Por favor, valide el telefono
            </div>
            <div class="valid-feedback">
            Correcto
            </div>
        </div>
        
        <div class="col-md-5">
        <label for="validationCustom04" class="form-label">Digite la direccion de la persona: </label>
        <input type="text" class="form-control" id="validationCustom04" name="direccion" placeholder="Ej. Calle 00 # 00 - 00" pattern="[a-zA-Z0-9\s\-]{1,40}" required><br>
            <div class="invalid-feedback">
            Por favor, valide la dirección
            </div>
            <div class="valid-feedback">
            Correcto
            </div>
        </div>
        
        <br>
        <div class="col-md-11">
        <input type="submit" value="Registrar">
        </div>
    </form>
    </div>
</fieldset>
</center>
<br>

</table>

    <form action="persona.php">
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

<script type='text/javascript'>
function validar(){

var todo_correcto = true;

if(document.getElementById('validationCustom01').value.length < 6 ){
    todo_correcto = false;
}

if(document.getElementById('validationCustom02').value.length < 10 ){
    todo_correcto = false;
}
if(document.getElementById('validationCustom03').value.length < 10 ){
    todo_correcto = false;
}
if(document.getElementById('validationCustom04').value.length < 10 ){
    todo_correcto = false;
}
if(!todo_correcto){
    alert('Algunos campos no están correctos, vuelva a revisarlos');
}

return todo_correcto;
}
</script>
	
</body>
</html>