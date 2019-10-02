<?php

function session(){
  if (isset($_SESSION["Nombre"])) {
    return
    '<ul class="sub-menu ">
      <li class="botnombre"><a href="#">' . $_SESSION["Nombre"] .'</a></li>
      <li class="botonsesion"><a href="cerrar_sesion.php">Cerrar sesión</a></li>
      </ul>';
  }
else {
  return
  '
  <ul class="sub-menu ">
    <li class="botonsesion"><a href="login.php">Iniciar sesión</a></li>
    <li class="botonregis"><a href="registro.php">Registrate</a></li>
  </ul>';
}
}

 ?>

    <div class="navbar">

      <ul >
        <li class="logo"><a href="#"><img src="images/logo.jpeg"></a></li>
        <li class="espacio">
          <?=session(); ?>
        </li>
        <li class="botonayuda"><a href="faq.php">Ayuda</a></li>
      </ul>

        <input  class="buscar" type="search" placeholder="Buscar en chucherias" aria-label=></input>
        <button class="botonbuscar" type="submit">Buscar</button>

    </div>
