<?php
// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>registro</title>
    <link rel="stylesheet" href="css/stilos.css">
  </head>
  <body>
    <div class="contenedor">
      <header>
        <h1>Registro</h1>

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
        <nav>
          <ul>
            <li><a href="iniciar_sesion.php">¿Ya tiene cuenta?</a></li>
            <li><a href="faq.htlm">Quienes somos</a></li>
          </ul>
        </nav>
      </section>
    </div>
  </body>
</html>
