<?php
class Usuario{
  protected $nombre;
  protected $apellido;
  protected $email;
  protected $password;
  protected $pais;
  protected $avatar;

  public function __construct($Nombre, $Apellido, $Email, $Password, $Pais, $avatar=null){
    $this->nombre = $Nombre;
    $this->apellido = $Apellido;
    $this->email = $Email;
    $this->password = $Password;
    $this->pais = $Pais;
    $this->avatar = $avatar;
  }
  public function getNombre(){
        return $this->nombre;
  }

  public function setNombre($Nombre){
        $this->nombre = $nombre;

        return $this;
  }

  public function getApellido(){
        return $this->apellido;
  }

  public function setApellido($Apellido){
        $this->apellido = $apellido;

        return $this;
    }

  public function getEmail(){
        return $this->email;
  }

  public function setEmail($Email){
        $this->email = $Email;

        return $this;
  }

  public function getPassword(){
        return $this->password;
  }

  public function setPassword($Password){
        $this->password = $Password;

        return $this;
  }


  public function getPais(){
        return $this->pais;
  }

  public function setPais($Pais){
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
