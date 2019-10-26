<?php
$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "chucherias";
$tbl_name = "usuarios";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
if ($conexion->connect_error) {
  die("la conexion fallo: " . $conexion->connect_error);
}

$buscarUsuario = "SELECT * from $tbl_name where nombre = '$_POST[Nombre]'";

$result = $conexion->query($buscarUsuario);

$count = mysqli_num_rows($result);

if ($count == 1) {
  echo "<br />" . "el nombre de usuario ya a sido tomado." . "<br />";

  echo "<a href='index.php'>por favor escoja otro nombre</a>";
}
else {
  $form_pass = $_POST["Password"];
  $hash = password_hash($form_pass,PASSWORD_DEFAULT);

  $query = "INSERT into usuarios(nombre, apellido,email, contrasena, pais, avatar)
  values ('$_POST[Nombre]','$_POST[Apellido]','$_POST[Email]', '$hash', '$_POST[pais]', '$_POST[avatar]')";

  if ($conexion->query($query)=== true) {
    echo "<br />" . "<h2>" . "usuario creado exitosamente!" . "</h2>";

    echo "<h4>" . "bienvenido:" . $_POST["Nombre"] . "</h4>";

    echo "<h5>" . "hacer login:" . "<a href='login.php'>login</a>" . "</h5>";

  }
  else {
    echo "error al crear el usuario." . $query . "<br>" . $conexion->error;
  }
}
mysqli_close($conexion);
 ?>
