<?php
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
      <footer>
        <div class="footer-simple">
          <div class="cajaa">
              <ul>
                <li><a href="#"><i class="fas fa-map-marker-alt"></i></a> Calle false 123<br> Pilar </li>
                <li><a href="#"><i class="fas fa-phone-alt"></i></a>11346839</li>
                <li><a href="#"><i class="fas fa-envelope"></i></a>Atencionalcliente@gmail.com</li>
              </ul>
          </div>
          <div class="cajab">
            <h4>SOBRE CHUCHERIAS</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <ul>
              <li> <a href="#"><i class="fab fa-facebook-square"></i></a></li>
              <li> <a href="#"><i class="fab fa-twitter-square"></i></i></a></li>
              <li><a href="#"><i class="fab fa-instagram"></i></i></a></li>
              <li> <a href="#"><i class="fab fa-facebook-square"></i></a></li>
            </ul>

          </div>
          Copyright (c) 2018 Copyright Holder All Rights Reserved.
        </div>
      </footer>
    </div>
  </body>
</html>
