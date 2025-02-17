<?php
include_once('autoload.php');


if ($_POST) {
    $usuario = BaseMySQL::buscarPorEmail($_POST["email"],$pdo,'usuarios');
  if ($usuario == null) {
    $errores  [] = "El usuario no existe";

   }
    else {
      $errores = $validador->validarLogin($_POST, $usuario);
      if (count($errores) == 0) {
        Autenticador::seteoUsuario($usuario);
    header("Location:index.php");
  }
  }
}

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/prueba.css">
    <title>iniciar sesion</title>
  </head>
  <body class="bodyLogin">
    <header>
      <nav>
        <?php include_once 'nav.php'; ?>
      </nav>
    </header>
    <div class="contenedorlog">
    <h1>Iniciar sesión.</h1>
     <?php if (isset($errores)):?>
       <?php foreach ($errores as $key => $error): ?>
           <li class="alert alert-danger"><?= $error?></li>
       <?php endforeach;?>
     <?php endif; ?>
     <form  enctype="multipart/form-data" class="login" action="login.php" method="POST">

       <label class="nombredeusuario" for="email">Email</label><br>
       <input type="email" name="email" value="" required ><br>
       <label for="password">Contraseña</label><br>
       <input type="password" name="password" value="" required><br>
       <div>
         <input type="checkbox" name="Recuerdame">
         <label for="login-remember">Recuerdame</label>
       </div><br>
       <a href="#">Olvide mi contraseña.</a><br>
       <a href="registro.php">¿No tienes cuenta aún?</a><br>
       <a class="loginbutton" href="index.php"> <button type="submit" name="Iniciar">Iniciar</button> </a>

     </form>
  </div>
  <footer>
    <div class="footer-simple">
      <div class="loginfooter1">
          <ul class="ula">
            <li><a href="#"><i class="fas fa-map-marker-alt"></a></i> Calle false 123<br> Pilar </li><br>
            <li><a href="#"><i class="fas fa-phone-alt"></a></i>11346839</li>
            <li><a href="mailto:Atencion@chucherias.com">envianos un Email</a><i class="fas fa-envelope"></i></li>
          </ul>
      </div>
      <div class="loginfooter2">
        <h4>SOBRE CHUCHERIAS</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <ul>
          <li><a href="#"><i class="fab fa-facebook"></i></a></li>
          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          <li><a href="#"><i class="fab fa-pinterest-square"></i></a></li>
        </ul>

      </div>
      <div class="loginfooter3">
        Copyright (©) 2018 Copyright Holder All Rights Reserved.
      </div>
    </div>
  </footer>

    <script src="https://kit.fontawesome.com/5e51a129d6.js"></script>
  </body>
</html>
