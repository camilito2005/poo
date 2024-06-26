<?php
require_once 'conexion.php';
require_once './C/C-Usuarios.php';

$userController = new Registro();
$userController->Opciones();
?>