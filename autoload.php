<?php
//session_start();
include_once 'class/ArmarRegistro.php';
include_once 'class/BaseDeDatos.php';
include_once 'class/BaseMySQL.php';
include_once 'class/Usuario.php';
include_once 'class/Validador.php';
include_once ('class/Autentica.php');

// include_once 'nav.php';
include_once 'paises.php';
include_once 'productos.php';

$host = 'localhost';
$bd = 'chucherias';
$usuario = 'root';
$password = '';
$puerto = 3306;


$pdo = BaseMYSQL::conexion($host,$bd,$usuario,$password,$puerto);

$validador = new Validador($_POST);

 ?>
