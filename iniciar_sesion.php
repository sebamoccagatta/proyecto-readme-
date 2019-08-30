<?php

 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/stilos.css">
    <title>iniciar sesion</title>
  </head>
  <body>
    <div class="contenedor">
    <h1>Iniciar sesion.</h1>
    <form class="login" action="index.html" method="post">

      <label class="nombredeusuario" for="Usuario">Nombre de usuario.</label><br>
      <input type="text" name="Nombre de usuario" required ><br>
      <label for="password">Contraseña.</label><br>
      <input type="password" name="Contraseña" required><br>
      <div>
        <input type="checkbox" name="Recuerdame">
        <label for="login-remember">Recuerdame</label>
      </div>
      <a href="#">Olvide mi contraseña.</a>
      <a href="index.html"> <button type="submit" name="Iniciar">Iniciar</button> </a>

    </form>
  </div>
  <footer>
    <div class="footer-simple">
      <div class="cajaa">
          <ul class="ula">
            <li><a href="#"><i class="fas fa-map-marker-alt"></i></a> Calle false 123<br> Pilar </li><br>
            <li><a href="#"><i class="fas fa-phone-alt"></i></a>11346839</li>
            <li><a href="#"><i class="fas fa-envelope"></i></a>Atencionalcliente@gmail.com</li>
          </ul>
      </div>
      <div class="cajab">
        <h4>SOBRE CHUCHERIAS</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <ul>
          <li><a href="#"><i class="fab fa-facebook"></i></a></li>
          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          <li><a href="#"><i class="fab fa-pinterest-square"></i></a></li>
        </ul>

      </div>
      <div class="copy">
        Copyright (c) 2018 Copyright Holder All Rights Reserved.
      </div>
    </div>
  </footer>

    <script src="https://kit.fontawesome.com/5e51a129d6.js"></script>
  </body>
</html>
