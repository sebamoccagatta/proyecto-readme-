<?php
class Usuario{
  protected $nombre;
  protected $apellido;
  protected $email;
  protected $password;
  protected $pais;
  protected $avatar;

  public function __construct($nombre, $apellido, $email, $password, $pais, $avatar=null){
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->email = $email;
    $this->password = $password;
    $this->pais = $pais;
    $this->avatar = $avatar;
  }
  public function getNombre(){
        return $this->nombre;
  }

  public function setNombre($nombre){
        $this->nombre = $nombre;

        return $this;
  }

  public function getApellido(){
        return $this->apellido;
  }

  public function setApellido($apellido){
        $this->apellido = $apellido;

        return $this;
    }

  public function getEmail(){
        return $this->email;
  }

  public function setEmail($email){
        $this->email = $email;

        return $this;
  }

  public function getPassword(){
        return $this->password;
  }

  public function setPassword($password){
        $this->password = $password;

        return $this;
  }


  public function getPais(){
        return $this->pais;
  }

  public function setPais($pais){
        $this->pais = $pais;

        return $this;
  }

  public function getAvatar(){
        return $this->avatar;
  }

  public function setAvatar($avatar){
        $this->avatar = $avatar;

        return $this;
  }
}
 ?>
