<?php
class ArmarRegistro{
//la funcion es static ya que es un metodo
  static public function armarUsuario($datos, $imagen){
    //tomo la contraseña y la hasheo y la guardo en una variable
    // $contra =password_hash($datos["Password"] , PASSWORD_DEFAULT);
        $usuario = new Usuario(
        $datos["Nombre"],
        $datos["Apellido"],
        $datos["Email"],
        $datos["Password"],
        $datos["pais"],

        $imagen );
        return $usuario;

  }
   //ESTA OPCION ES PARA GUARDAR AL USUARIO EN VERSION JSON, EN EL CASO DE HABER UN ERROR EN BaseMySQL
   static public function guardarUsuario($usuario){
     $json = json_encode($usuario);
     file_put_contents("usuario.json", $json.PHP_EOL, FILE_APPEND);
   }

  static public function armarImagen($imagen){
    //ACA GUARDO EL NOMBRE DE LA IMAGEN
    $nombre = $_FILES[ "avatar"]["name"];
    $ext = pathinfo($nombre, PATHINFO_EXTENSION);
    //En la variable $archivoimg guardo
    $archivoOrigen = $_FILES["avatar"]["tmp_name"];

    // La variable $rutaDestino va a contener toda la ruta hasta la carpeta donde guardaremos la imagen que suba el usuario.
    // La funcion dirname(__FILE__) nos va a devolver la ruta exacta hasta el lugar donde esta el archivo que estamos utilizando en este momento.
    // A esa ruta le agregué la carpeta fotos que va a ser la carpeta donde se guardaran estas imagenes
    $rutaDestino = dirname(__DIR__);
    $rutaDestino = $rutaDestino."/images/fotosperfil/";

    // Utilizando la funcion uniqid() php va a crearle un nombre unico a mi imagen
    $nombreImg = uniqid();

    // En esta parte voy a guardar la ruta final de mi archivo que va a ser la ruta hastala carpeta fotos y ahi voy a ponerle el nombre creado en el paso anterios y ponerle la extension del archivo que la separe en los primeros pasos.
    $rutaDestino = $rutaDestino.".".$nombreImg.".".$ext;

    // Voy a subir el archivo que se encuentra en el tmp_name(que se guardo en la variable $archivoOrigen) en la ruta final creada en el paso anterior.
    move_uploaded_file ($archivoOrigen, $rutaDestino);

    // La funcion retornara el nombre final de la imagen con su extension.
    return $nombreImg.".".$ext;
  }
}



 ?>
