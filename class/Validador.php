<?php
include_once('autoload.php');
Class Validador {

  public function validarRegistro($datos){

$errores=[];

if ($datos) {
  if (strlen($datos["nombre"])==0) {
    $errores[] = "El campo nombre se encuentra vacio";
  }
  if (strlen($datos["apellido"])==0) {
    $errores[] = "El campo Apellido se encuentra vacio";
  }
  if (!filter_var($datos["email"], FILTER_VALIDATE_EMAIL)){
    $errores[] = "El email ingresado tiene un formato incorrrecto";
  }
  if (strlen($datos["password"]) <=6 ) {
    $errores[] = "Debe ingresar una contrasenia mayor a 6 caracteres";
  }
  if ($datos["password"]!= $datos ["confirmarc"]) {
    $errores[] = "Las contraseñas no coinciden";
  }
  if ($_FILES != null) {
    if ($_FILES ["avatar"]["error"]!= 0){
      $errores ["avatar"] = "Error al cargar la imagen,vuelva a intentar";
  }
  $Nombreimg=$_FILES["avatar"]["name"];
  $ext= pathinfo($Nombreimg, PATHINFO_EXTENSION);
  if ($ext!= "jpg" && $ext != "jpeg" && $ext != "png") {
    $errores["avatar"]= "La extencion de la imagen es incorrecta";
  }
}
}
return $errores;
}


public function validarLogin($datos, $usuario){

  if(password_verify($datos["password"], $usuario["contrasena"]) == false){
    $errores[] = "El usuario/contrasenia es incorrecto";
  }
  var_dump($errores);
  // La funcion retorna los errores
  return $errores;
}
  }


?>
