<?php
session_start();
include_once 'autoload.php';


if ($_POST) {
   $errores = Validador::validarRegistro($_POST);
     if (count($errores) == 0) {
         $usuario = BaseMySQL::buscarPorEmail($_POST["Email"], $pdo, 'usuarios');
         if ($usuario != null) {
           $errores[] = "El email ya se encuentra registrado";
         } else {
          $avatar = ArmarRegistro::armarImagen($_FILES);
          $usuario = ArmarRegistro::armarUsuario($_POST, $avatar);
          BaseMYSQL::guardarUsuario($pdo, $usuario);
          header("Location:login.php");
          exit;
        }
      }
    }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>registro</title>
      <script src="https://kit.fontawesome.com/5e51a129d6.js"></script>
    <link rel="stylesheet" href="css/prueba.css">
  </head>
  <body>
    <div class="contenedorlog">
      <header>
        <nav><?php include_once ('nav.php'); ?></nav>

        <h1>Registro</h1>

        <br><br>
      </header>
      <section>
        <?php if (isset($errores)):?>
        <ul>
        <?php foreach ($errores as $key => $error) : ?>
        <li class="alert alert-danger"><?=$error?></li>
        <?php endforeach ?>
        </ul>
        <?php endif; ?>
        <form class="register" action="registro.php" method="POST" enctype="multipart/form-data">
          <label for="Nombre">Nombre:</label><br>
          <input type="text" name="Nombre" required><br>
          <label for="Apellido">Apellido:</label><br>
          <input type="text" name="Apellido" required><br>
          <label for="Email">E-mail:</label><br>
          <input type="email" name="Email" required><br>
          <label for="password">Contraseña:</label><br>
          <input type="Password" name="Password" required><br>
          <label for="Confirmarc">Confirmar Contrasena:</label><br>
          <input type="password" name="Confirmarc" required><br>
          <br>
          <?php include_once ('paises.php'); ?>
          <label  for="pais">¿De donde eres?</label><br>
          <select class="paise"  name="pais" required>
            <?php foreach ($paises as $key => $value) : ?>
             <option value="<?=$key ?>"><?=$value ?></option>
            <?php endforeach; ?>
          </select><br>
          <label for="avatar">subi tu avatar</label>
          <input type="file" name="avatar" value="">
          <!-- <button type="submit" name="button">subi el archivo</button> -->
          <br>
          <button type="submit" name="enviar_formulario">Enviar registro</button>
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
                <li><a href="mailto:Atencionalcliente@chucherias.com">envianos un Email<i class="fas fa-envelope"></i></a></li>
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
          Copyright (c) 2018 Copyright Holder All Rights Reserved.
          </div>
        </footer>
      </div>
    </div>
  </body>
</html>
