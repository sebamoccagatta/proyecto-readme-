<?php
session_start();
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
$db_nombre = 'chucherias';
$usuario = 'root';
$password = '';
$puerto = 3306;

$pdo = BaseMySQL::conexion($host, $db_nombre, $usuario, $password,$puerto);

 ?>
