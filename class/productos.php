<?php

class Producto{
    private $nombre;
    private $precio;
    private $categoria;
    private $description;


    public function __construct($nombre, $precio, $categoria, $descripcion = null){
      $this ->nombre = $nombre;
      $this ->precio = $precio;
      $this ->categoria = $categoria;
      $this ->decription = $description;
    }

    public function getNombre(){
      return $this ->nombre;
    }
    public function setNombre($nombre){
      $this ->nombre = $nombre;
      return $this;
    }

    public function getPrecio()
    {
      return $this ->precio;
    }

    public function setPrecio($precio)
    {
      $this ->categoria = $categoria;

      return $this;

    }

    public function getDescription()
    {
      return $this ->description;

    }
    public function setDescription($description)
    {
      $this ->description = $description;

      return $this;

    }
  }


 ?>
