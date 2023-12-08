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
    <title>Resolucion 1407</title>
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
<div id="contenido1">


<main id="contenidos">    
<p>Todo servicio farmacéutico debe desarrollar, implementar y mantener un Sistema de Gestión de la Calidad (SGC). 
Este sistema es responsable de asegurar que las prestaciones brindadas por el servicio sean de alta calidad y 
cumplan con las expectativas de los usuarios.
<h3>2.Estructura interna del SGC.</h3>
El SGC debe incluir una estructura interna y las principales funciones del servicio farmacéutico. Algunos 
ejemplos de estas funciones incluyen:
<ul>
<li>Evaluación y gestión de riesgos.</li>
<li>Establecimiento y control de objetivos.</li>
<li>Mejora continua del servicio.</li>
</ul>
<h3>3.Usuarios, destinatarios y beneficiarios del servicio.</h3>
El SGC debe identificar a los usuarios, destinatarios y beneficiarios del servicio farmacéutico y determinar 
el nivel de satisfacción acerca de las funciones a cargo del servicio y la calidad del mismo.
<h3>4.Proveedores de materias primas, medicamentos y dispositivos médicos.</h3>
El SGC debe también evaluar a los proveedores de materias primas, medicamentos y dispositivos médicos que 
utiliza el servicio farmacéutico.
<h3>5.Procesos del servicio farmacéutico.</h3>
El SGC debe documentar los procesos del servicio farmacéutico, como la inyectologia, la verificación de calidad, 
la distribución y el control de existencias.
<h3>6 Criterios y métodos de evaluación y control.</h3>
El SGC debe establecer criterios y métodos para evaluar y controlar la calidad del servicio farmacéutico, como 
el uso de indicadores de gestión y auditorías.
<h3>7.Puntos de control.</h3>
El SGC debe identificar puntos de control en los procesos farmacéuticos, como el almacenamiento y venta de 
medicamentos, un entorno debidamente acondicionado para dicho proceso, para garantizar la calidad y seguridad 
de los productos farmacéuticos.
<h3>8.Acciones para alcanzar los resultados planificados y la mejora continua.</h3>
El SGC debe incluir acciones específicas para alcanzar los resultados planificados y promover la mejora 
continua del servicio farmacéutico.
<br><br>
<h3>9.Conclusión.</h3>
En resumen, el Sistema de Gestión de la Calidad es un componente esencial del servicio farmacéutico, ya que 
asegura que las prestaciones brindadas sean de alta calidad y cumplan con las expectativas de los usuarios. 
El SGC debe ser implementado de manera integral y ser de obligatorio cumplimiento por parte de todas las 
personas responsables de la prestación del servicio farmacéutico.
</p>
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