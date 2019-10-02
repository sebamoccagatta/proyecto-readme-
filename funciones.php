<?php

function validarLogin($datos){
  $errores = [];
  // Utilizando la funcion buscarPorEmail la cual me va a devolver toda la informacion del usuario (nombre, apellido, email, avatar) en forma de array que en este caso se lojara en la variable $usuario.
  $usuario = buscarPorEmail($datos["Email"]);
  // var_dump($usuario);
  // exit;
  // En este if evaluo si la funcion buscarPorEmail no me trajo ningun usuario le voy a retornar que no e encontro ningun usuario.
  if ($usuario == null) {
    $errores[] = "Usuario no se encuentra registrado";
  }
  // En este if utilizando la funcion password_verify le paso lo ingresado por el usuario en el formulario y lo que se encuentra en la posicion contrasenia del usuario buscado. Esta funcion retorna true si ambas contraseñas coinciden y false si no coin ciden. En caso de ser false retornara que la contraseña es incorrecta.
  if(password_verify($datos["Password"], $usuario["Password"]) == false) {
    $errores[] = "La contraseña es incorrecta";
  }
  // La funcion retorna los errores
  return $errores;

}function abrirBaseDatos(){
  if (file_exists("usuarios.json")){
    $baseDatosJson = file_get_contents("usuarios.json");

    $baseDatosJson = explode(PHP_EOL,$baseDatosJson);

    array_pop($baseDatosJson);

    foreach ($baseDatosJson as $usuarios) {
      $arrayUsuarios[]=json_decode($usuarios,true);
    }
    return $arrayUsuarios;
  }
  else {
    return null;
  }
}
 function buscarPorEmail($email){
   // Lo primero que hace esta funcion es utilizar la funcion abrirBaseDatos que nos va a devolver la base con todos los usuarios en un array asociativo
   $baseDeDatos = abrirBaseDatos();
   // Utilizando un foreach voy a recorrer toda la base de datos en donde el value va a ser un array con la info de cada uno de los usuarios.
   foreach ($baseDeDatos as $numero => $usuario) {
          // El if va a fijarse si el email ingresado en la funcion coincide con alguno de los emails dentro de la base de datos. En caso de que haya coincidencia la funcion retornara la informacion de todo el usuario, caso contrario retornara false.
   if ($email === $usuario["Email"]) {
       return $usuario;
     }
   }
  return null;
 }
// En esta funcion (si es que toda la validacion fue correcta) se le va a poner a la variable $_SESSION toda la información del usuario que inicio sesion.
function inicioSesion($usuario){
  $_SESSION["Nombre"] = $usuario["Nombre"];
  $_SESSION["Apellido"] = $usuario["Apellido"];
  $_SESSION["Email"] = $usuario["Email"];
  $_SESSION["avatar"] = $usuario["avatar"];
  if (isset($datos["Recuerdame"])) {
    setcookie("Email",$dato["Email"],time()+3600);
    setcookie("Contraseña",$dato["Password"],time()+3600);
  }
}
 ?>
