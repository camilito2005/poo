<?php

require_once './M/M-Usuarios.php';

    
   
    
        $users = $this->userModel->Tabla();
        require 'views/users/index.php';


if (isset($_POST["enviar"])) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $data = [
            'nombre' => $_POST['nombre'],
            'email' => $_POST['email'],
            'contraseña' => $_POST['password']

        ];
        $this->userModel->Crear($data);
        header('Location: index.php');
    } else {
        require './V/formulario.php';
    }
}
        
    


        $id = $_GET['id'];
        


        if (isset($_POST["actualizar"])) {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $data = [
                    'nombre' => $_POST['nombre'],
                    'email' => $_POST['email'],
                    'contraseña' => $_POST['password']
                ];
                $this->userModel->Actualizar($id, $data);
                header('Location: index.php');
            } else {
                require '../V/editar.php';
            }
        }
        
    

if (isset($_REQUEST["eliminar"])) {
    if (isset($_GET['id'])) {

        $id = $_GET['id'];
    $this->userModel->Eliminar($id);
    header('Location: index.php');
    }
}
        
        
    

?>
