<?php

function session(){
  if (isset($_SESSION["Nombre"])) {
    return
    '<ul class="sub-menu menudespl">
      <li><a href="#">' . $_SESSION["Nombre"] .'</a></li>
      <li><a href="cerrar_sesion.php">cerrar session</a></li>
      <li><a href="faq.php">ayuda</a></li>
    </ul>';
  }
else {
  return
  '
  <ul class="sub-menu menudespl">
    <li><a href="login.php">iniciar sesion</a></li>
    <li><a href="registro.php">registrate</a></li>
  </ul>';
}
}

 ?>

    <div class="navbar">
      <ul>
        <li class="logo"><a href="#"><img src="images/logo.jpeg"></a></li>
        <li>
          <?=session(); ?>
        </li>
        <li><a href="#">contacto</a></li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input style="position: relative;left: 33vh;" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label=> </input>
        <button style="position: relative;left: 46vh;bottom: 3vh;" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
