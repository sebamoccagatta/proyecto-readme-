<?php

class BaseMYSQL extends BaseDatos{
    static public function conexion($host,$db_nombre,$usuario,$password,$puerto){
      try {
        $dsn="mysql:host=".$host.";"."dbname=".$db_nombre.";"."port=".$puerto;
        $baseDatos = new PDO($dsn,$usuario,$password);
        $baseDatos->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $baseDatos;
      } catch (PDOException $errores) {
        echo "No se pudo conectar a la base de datos". $errores->getMessage();
        exit;
      }

    }

    static public function buscarPorEmail($email){

      // $sql ="SELECT * FROM usuarios WHERE email = :email";

      $query ->prepare("SELECT * FROM usuarios WHERE email like:email");
      $query->bindValue(':email', $email);
      $query->execute();
      $usuario = $query->fetch(PDO::FETCH_ASSOC);
      return $usuario;
    }

    static public function guardarUsuario($pdo,$usuario){
    $sql = "INSERT INTO usuarios VALUES(default, :nombre, :apellido, :email, :password, :pais, :avatar)";

    $guardarUsu = $pdo->prepare("INSERT INTO usuarios VALUES(default, :nombre, :apellido, :email, :password, :pais, :avatar)");
    $guardarUsu->bindValue(':nombre', $usuario->getNombre());
    $guardarUsu->bindValue(':apellido', $usuario->getApellido());
    $guardarUsu->bindValue(':email', $usuario->getEmail());
    $guardarUsu->bindValue(':password', $usuario->getPassword());
    $guardarUsu->bindValue(':pais', $usuario->getPais());
    $guardarUsu->bindValue(':avatar', $usuario->getAvatar());

    $guardarUsu->execute();
    }

    public function leer(){
      //vacio
    }

    public function actualizar(){
      //vacio
    }

    public function borrar(){
      //vacio
    }

    public function guardar($usuario){
      //metodo usado para Json
    }
}
 ?>
