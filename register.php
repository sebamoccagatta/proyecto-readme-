<?php
sesionstart();
require_once 'paises.php';
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

<br><br>
      </header>
      <section>
        <form class="" action="iniciar_sesion.php" method="post">
          <label for="Nombre">Nombre:</label><br>
          <input type="text" name="Nombre" required><br>
          <label for="Apellido">Apellido:</label><br>
          <input type="text" name="Apellido" required><br>
          <label for="email">E-mail:</label><br>
          <input type="email" name="email" required><br>
          <label for="Contraseña">Contraseña:</label><br>
          <input type="password" name="Contraseña" required><br>
          <label for="Confirmarc">Confirmar Contraseña:</label><br>
          <input type="password" name="Confirmarc" required><br>
          <br>
          <label  for="pais">¿De donde eres?</label><br>
          <select class="paise"  name="pais" required>
            <?php foreach ($paises as $key => $value) : ?>
             <option value="<?=$key ?>"><?=$value ?></option>
            <?php endforeach; ?>
          </select><br>
          <button type="submit" name="enviar formulario">Enviar registro</button>
        </form>
        <nav>
          <ul>
            <li><a href="iniciar_sesion.php">¿Ya tienes cuenta?</a></li>
            <li><a href="faq.html">Quienes somos</a></li>
          </ul>
        </nav>
      </section>
    </div>
  </body>
</html>
