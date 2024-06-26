<?php

require_once './M/M-Usuarios.php';

class Registro {
    private $userModel;

    public function __construct() {
        global $pdo; 
        $this->userModel = new Usuarios($pdo);
    }

    public function Opciones() {
        $action = isset($_GET['action']) ? $_GET['action'] : 'list';

        switch ($action) {
            case 'list':
                $this->listUsers();
                break;
            case 'create':
                $this->createUser();
                break;
            case 'edit':
                $this->editUser();
                break;
            case 'update':
                $this->editUser();
                break;
            case 'delete':
                $this->deleteUser();
                break;
            default:
                $this->listUsers();
                break;
        }
    }

    public function listUsers() {
        $users = $this->userModel->Tabla();
        require 'views/users/index.php';
    }

    public function createUser() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'nombre' => $_POST['nombre'],
                'email' => $_POST['email']
            ];
            $this->userModel->Crear($data);
            header('Location: index.php');
        } else {
            require 'views/users/create.php';
        }
    }

    public function editUser() {
        $id = $_GET['id'];
        $user = $this->userModel->Ver($id);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'nombre' => $_POST['nombre'],
                'email' => $_POST['email']
            ];
            $this->userModel->Actualizar($id, $data);
            header('Location: index.php');
        } else {
            require 'views/users/edit.php';
        }
    }

    public function deleteUser() {
        $id = $_GET['id'];
        $this->userModel->Eliminar($id);
        header('Location: index.php');
    }
}
?>