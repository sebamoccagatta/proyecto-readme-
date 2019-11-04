<?php

class BaseMYSQL extends BaseDatos{
  static public function conexion($host,$db_nombre,$usuario,$password,$puerto){
      try {
          $dsn = "mysql:host=".$host.";"."dbname=".$db_nombre.";"."port=".$puerto;
          $baseDatos = new PDO($dsn,$usuario,$password);
          $baseDatos->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
          return $baseDatos;
      } catch (PDOException $errores) {
          echo "No me pude conectar a la BD ". $errores->getmessage();
          exit;
      }
  }
    static public function buscarPorEmail($email, $pdo,$tabla){
      //Aquí hago la sentencia select, para buscar el email
      $sql = "SELECT * FROM $tabla WHERE email = :email";
      // Aquí ejecuto el prepare de los datos
      $query = $pdo->prepare($sql);
      $query->bindValue(':email',$email);
      $query->execute();
      $usuario = $query->fetch(PDO::FETCH_ASSOC);
      return $usuario;
  }


    static public function guardarUsuario($pdo,$usuario,$tabla){
    $sql = "INSERT INTO $tabla VALUES(default, :nombre, :apellido, :email, :password, :pais, :avatar)";

    $guardarUsu = $pdo->prepare("INSERT INTO $tabla VALUES(default, :nombre, :apellido, :email, :password, :pais, :avatar)");
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
