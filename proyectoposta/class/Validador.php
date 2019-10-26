<?php
Class Validador {
  public function validarregistro($datos){
$errores=[];
if ($datos) {
  if (strlen($datos["Nombre"])==0) {
    $errores[] = "El campo nombre se encuentra vacio";
  }
  if (strlen($datos["Apellido"])==0) {
    $errores[] = "El campo Apellido se encuentra vacio";
  }
  if (!filter_var($datos["Email"], FILTER_VALIDATE_EMAIL)){
    $errores[] = "El email ingresado tiene un formato incorrrecto";
  }
  if (strlen($datos["Password"]) < 6 ) {
    $errores[] = "Debe ingresar una contrasenia mayor a 6 caracteres";
  }
  if ($datos["Password"]!= $datos ["Confirmarc"]) {
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
public function ValidarLogin($datos, $usuario) {
  if(password_verify(["Password"], $usuario["Confirmarc"])== false){
    $errores[]="El usuario o la contraseña es incorrecta";
  }
  return $errores;
}
}



 ?>
