<?php
require_once 'productos.php';
session_start();

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <script src="https://kit.fontawesome.com/5e51a129d6.js"></script>
    <link rel="stylesheet" href="css/prueba.css">
    <title>Chucherias</title>
  </head>
  <body>
    <div class="contenedor">
    <header>
      <nav>
      <?php require_once'nav.php' ?>
      </nav>
<div class="banner">
<img src="images/bannerprueba.jpg" alt="banner">
</div>
    </header>

    <h1> PRODUCTOS ARTESANALES</h1>

    <section>
      <h2>Indumentaria</h2>
      <br>
      <?php foreach  ($indumentaria as $key => $value) :?>
				<article class="product">

					<div class="photo-container">
						<img class="photo" src="images/<?=$value["imagen"]?>" alt="Telefono1">
						<a class="zoom" href="images/<?=$value["imagen"]?>"><center> <img src="images/lupa.png" alt=""> <center></a>
					</div>
					<h2><center><?=$value["titulo"] ?><center></h2>
					<p><center><?=$value["descripcion"] ?><center></p>
				</article>
			<?php endforeach?>
      <br>

      <h2>Artesania en madera</h2>
      <br>
      <?php foreach  ($madera as $key => $value) :?>
				<article class="product">

					<div class="photo-container">
						<img class="photo" src="images/<?=$value["imagen"]?>" alt="Telefono1">
						<a class="zoom" href="images/<?=$value["imagen"]?>"><center> <img src="images/lupa.png" alt=""> <center></a>
					</div>
					<h2><center><?=$value["titulo"] ?><center></h2>
					<p><center><?=$value["descripcion"] ?><center></p>
				</article>
			<?php endforeach?>
      <h2>Chucherias</h2>
      <br>
      <?php foreach  ($chucherias as $key => $value) :?>
				<article class="product">

					<div class="photo-container">
						<img class="photo" src="images/<?=$value["imagen"]?>" alt="Telefono1">
						<a class="zoom" href="images/<?=$value["imagen"]?>"><center> <img src="images/lupa.png" alt="lupa"> <center></a>
					</div>
					<h2><center><?=$value["titulo"] ?><center></h2>
					<p><center><?=$value["descripcion"] ?><center></p>
				</article>
			<?php endforeach?>
    </section>
    <footer>
      <div class="footer-conteiner">
      <div class=" col-md-3 col-sm-6 col-xs-12 caja1">
        <h3>¿Quienes Somos?</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidata.</p>
      </div>
        <div class="col-md-3 col-sm-6 col-xs-12 caja2">
        <h3>Redes Sociales</h3>
        <p>Siguenos y enterate de las novedas </p>
          <ul class="red-social">
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#"><i class="fab fa-pinterest-square"></i></a></li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 caja3">
            <h3>Contactos</h3>
        <ul class="ul3">
          <li><a class="cont"  href="#">Escribenos</a></li>
          <li><a class="cont"  href="#">Contactanos</a></li>
          <li><a class="cont" href="#">Calle fasa 123</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 caja4">
            <h3>Encuentranos aqui</h3>

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3288.824955927956!2d-58.83771228505654!3d-34.48196455857249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bc9be41ce3bbaf%3A0x8d6ef3aa30e1cd59!2sBolivia+631%2C+B1635+Pres.+Derqui%2C+Buenos+Aires!5e0!3m2!1ses!2sar!4v1566560852784!5m2!1ses!2sar" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        </div>
    </footer>

  </div>
  </body>

</html>
