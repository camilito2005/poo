

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../M/Modell-U.php';

if (isset($_POST['enviar'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];

    $model = new UsuarioModel();

        if ($model->insertarUsuario($nombre, $email , $contraseña)) {

            header('Location: ../V/index.php');
            //return true;  Inserción exitosa

        } else {
            return false; // Error al insertar
        }

}

        
?>

