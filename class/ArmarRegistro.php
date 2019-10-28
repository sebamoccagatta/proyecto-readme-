<?php
class ArmarRegistro{
//la funcion es static ya que es un metodo
  static public function armarUsuario($datos, $imagen){
    //tomo la contraseña y la hasheo y la guardo en una variable
    $contra =password_hash($datos["Password"] , PASSWORD_DEFAULT);
        $usuario = new Usuario(
        $datos["Nombre"],
        $datos["Apellido"],
        $datos["Email"],
        $datos["Pais"],
        $contra,
        $imagen );
        return $usuario;

  }
   //ESTA OPCION ES PARA GUARDAR AL USUARIO EN VERSION JSON, EN EL CASO DE HABER UN ERROR EN BaseMySQL
   static public function guardarUsuario($usuario){
     $json = json_encode($usuario);
     file_put_contents("usuario.json", $json.PHP_EOL, FILE_APPEND);
   }

  static public function armarImagen(){
    //ACA GUARDO EL NOMBRE DE LA IMAGEN
    $nombre = $_FILES[ "avatar"]["name"];
    $ext = pathinfo($nombre, PATHINFO_EXTENSION);
    //En la variable $archivoimg guardo
  }
}



 ?>
