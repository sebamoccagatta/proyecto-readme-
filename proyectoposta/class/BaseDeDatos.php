<?php

abstract class BaseDatos{
    abstract public function guardar($registro);
    abstract public function leer();
    abstract public function borrar();
    abstract public function actualizar();
}
 ?>
