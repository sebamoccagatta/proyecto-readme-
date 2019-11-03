<?php
class Autenticador{
static public function SeteoUsuario($usuario){
$_SESSION["nombre"] = $usuario["nombre"];
$_SESSION["apellido"] = $usuario["apellido"];
$_SESSION["email"] = $usuario ["email"];
$_SESSION["pais"] = $usuario ["pais"];
$_SESSION["avatar"] = $usuario["avatar"];
//$_SESSION["rol"] = $usuario["rol"];
}
//static function chequeoRol(){
  //if ($_SESSION ["rol"] !=//segun el rol que otorguemos a nuestros usuarios){
//  header("Location:listadoProductos.php");
}
//}
//}

 ?>
