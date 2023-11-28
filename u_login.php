<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="EstiloLogin.css">
</head>
<body>
<div class="container">
<fieldset>
        <h1>Login de Usuario</h1>
        <br />
    <form id="" method="POST" action="u_inicio.php">
        <table>
      <tr>
    <td><label for="">Usuario:</label></td>
    <td><input type="text" name="usuario" id="" placeholder="Ingrese usuario"></td>
      </tr>
      
      <tr>
    <td><label for="">Contraseña:</label></td>
    <td><input type="password" name="contraseña" id="" placeholder="Ingrese contraseña"></td>
      </tr>
      
      <tr>
          <td>
            <button type="submit">Ingresar</button></td>
      </tr>
         </table>
  </form>
  <form action="INDEX.PHP" method="post">
      <tr>
          <td><button type="submit">Regresar</button></td>
      </tr>
  </form>
</fieldset></div>

</body>
</html>