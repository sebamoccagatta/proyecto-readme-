<?php

function validarregistro($datos){

$errores = [];

if ($datos){
    if (strlen($datos["Nombre"])==0){
    $errores []= "Debe ingresar un nombre <br>";
    }
    if (strlen($datos["Apellido"])==0) {
    $errores []=  "Debe ingresar un apellido <br>";
    }
    if (!filter_var($datos["email"],FILTER_VALIDATE_EMAIL)) {
    $errores []=  "Email no valido<br>";
    }
    if (strlen($datos["password"])< 8  ) {
    $errores []=  "La contraeña debe tener 8 digitos <br>";
    }
    if ($datos["password"] != $datos["confirmarc"]){
    $errores []=  "Las contraseñas no coinciden <br>";
    }
    if ($_FILES["avatar"]["error"] != 0) {
    $errores []= "Error al cargar la imagen";
    }
    $nombre = $_FILES["avatar"]["name"];
    $ext = pathinfo($nombre,PATHINFO_EXTENSION);
    if ($ext != "jpg" && $ext != "jpeg" && $ext != "png"){
    $errores []=  "Extencion incorrecta";
    }
      return $errores;
    }
    }


    function armarUsuario($datos, $imagen){
      $contra = PASSWORD_HASH($datos["password"],PASSWORD_DEFAULT);
      $usuario = [
        "Nombre"=>$datos["Nombre"],
        "Apellido"=>$datos["Apellido"],
        "Email"=>$datos["email"],
        "Password"=>$contra,
        "avatar" =>$imagen,
      ];
      return $usuario;
    }
    function guardarUsuario($usuario){
      $json = json_encode($usuario);
      file_put_contents("usuarios.json", $json.PHP_EOL, FILE_APPEND);
    }
    function persistir($input){
      if (isset($_POST[$input])){
        return $_POST[$input];
      }
    }
    function armarImag($imagen){
      $nombre = $_FILES["avatar"]["name"];
      $ext = pathinfo($nombre, PATHINFO_EXTENSION);
      $archivoOrigen = $_FILES["avatar"]["tmp_name"];
      $rutaDestino = dirname(__FILE__);
      $rutaDestino= $rutaDestino."/imagenes/fotosperfil/";
      $nombreImg = uniqid();
      $rutaDestino = $rutaDestino. "." .$nombreImg. ".".$ext;
      move_uploaded_file($archivoOrigen, $rutaDestino);
      return $nombreImg. ".".$ext;
    }
 ?>
