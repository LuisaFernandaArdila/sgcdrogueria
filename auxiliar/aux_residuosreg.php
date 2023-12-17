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
<img src="../imagen/LogoSGC.png" align="left" height="100">
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

    <form action="aux_residuos.php" method="post" class="row g-3 needs-validation" novalidate>
        
        <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Digite la fecha información: </label>
        <input type="date" name="fecha" id="validationCustom01" class="form-control" required>
        <div class="invalid-feedback">Por favor, validar la fecha</div>
        <div class="valid-feedback">Correcto</div>
        </div>
        
        <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Digite el tipo residuo: </label>
        <input type="text" name="tiporesiduo" id="validationCustom02" class="form-control" pattern="[a-zA-Z0-9\s]{1,20}" placeholder="Ej. Biosanitario" required>
        <div class="invalid-feedback">Por favor, validar el tipo residuo</div>
        <div class="valid-feedback">Correcto</div>
        </div>
        
        <div class="col-md-4">
        <label for="validationCustom03" class="form-label">Digite la cantidad residuos: </label>
        <input type="text" name="cantidad" id="validationCustom03" class="form-control" required pattern="[a-zA-Z0-9\s\-]{1,6}" placeholder="Ej. 8 Kg">
        <div class="invalid-feedback">Por favor, validar la cantidad residuos</div>
        <div class="valid-feedback">Correcto</div>
        </div>
        
        <div class="col-md-7">
        <label for="validationCustom04" class="form-label">Informacion generación de residuos: </label>
        <input type="text" name="infogeneracionresiduos" id="validationCustom01" class="form-control" placeholder="Ej. Bolsa verde" required>
        <div class="invalid-feedback">Por favor, validar información de residuos</div>
        <div class="valid-feedback">Correcto</div>
        </div>
        
        <div class="col-md-5">
        <label for="validationCustom05" class="form-label">Id empleados: </label>
        <select class="form-select" id="validationCustom05" name="Idempleados" required>
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
        <div class="invalid-feedback">Por favor, seleccione empleado</div>
        <div class="valid-feedback">Correcto</div>
        </div>
        
        <center><div class="col-md-11">
        <input type="submit" value="Crear registro">
        </div></center>
        
    </form>
</fieldset>
</center>
<br>

    <form action="residuos.php">
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