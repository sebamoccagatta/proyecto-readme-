<?php

class BaseMYSQL extends BaseDatos{
    static public function conexion($host,$db_nombre,$usuario,$password,$puerto,$charset){
      try {
        $dsn = "mysql:host=".$host.";"."dbname=".$db_nombre.";"."port=".$puerto.";"."charset=".$charset;
        $baseDatos = new PDO($dsn,$usuario,$password);
        $baseDatos->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $baseDatos;
      } catch (PDOException $errores) {
        echo "No se pudo conectar a la base de datos". $errores->getMessage();
        exit;
      }

    }

    static public function buscarPorEmail($email,$pdo,$tabla){
      $sql ="SELECT * FROM $tabla WHERE email = :email";
      $query = $pdo->prepare($sql);
      $query->bindValue(':email', $email);
      $query->execute();
      $usuario = $query->fetch(PDO::FETCH_ASSOC);
      return $usario;
    }

    static public function guardarUsuario($pdo,$usuario){
    $sql = "INSERT INTO usuarios VALUES(default, :nombre, :apellido, :email, :password, :pais, :avatar)";

    $guardarUsu = $pdo->prepare($sql);
    $guardarUsu->bindValue(':nombre', $usuario->getNombre());
    $guardarUsu->bindValue(':apellido', $usuario->getApellido());
    $guardarUsu->bindValue(':email', $usuario->getEmail());
    $guardarUsu->bindValue(':password', $usuario->getPassword());
    $guardarUsu->bindValue('pais', $usuario->getPais());
    $guardarUsu->bindValue('avatar', $usuario->getAvatar());

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
