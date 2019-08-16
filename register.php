<?php
echo "<pre>";
var_dump($_POST);
echo "</pre>";
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>registro</title>
  </head>
  <body>
    <div class="contenedor">
      <header>
        <nav>
          <ul>
            <li><a href="iniciar_sesion.php">¿ya tiene cuenta?</a></li>
            <li><a href="#">quienes somos</a></li>
          </ul>
        </nav>
      </header>
      <section>
        <form class="" action="register.php" method="post">
          <label for="Nombre">Nombre:</label><br>
          <input type="text" name="Nombre"><br>
          <label for="Apellido">Apellido:</label><br>
          <input type="text" name="Apellido"><br>
          <label for="email">E-mail:</label><br>
          <input type="email" name="email"><br>
          <label for="Contraseña">Contraseña:</label><br>
          <input type="password" name="Contraseña"><br>
          <label for="Confirmarc">Confirmar Contraseña:</label><br>
          <input type="password" name="Confirmarc"><br>
          <br>
          <button type="submit" name="enviar formulario">enviar formulario</button>
        </form>
      </section>
    </div>
  </body>
</html>
