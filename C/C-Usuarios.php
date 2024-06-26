<?php

require_once './M/M-Usuarios.php';

class Registro
{
    private $userModel;

    public function __construct()
    {
        global $pdo;
        $this->userModel = new Usuarios($pdo);
    }

    public function Opciones()
    {
        $action = isset($_GET['action']) ? $_GET['action'] : 'list';

        switch ($action) {
            case 'list':
                $this->ListarUsuarios();
                break;
            case 'create':
                $this->CrearUsuario();
                break;
            case 'edit':
                $this->EditarUsuarios();
                break;
            case 'update':
                $this->EditarUsuarios();
                break;
            case 'delete':
                $this->EliminarUsuarios();
                break;
            default:
                $this->ListarUsuarios();
                break;
        }
    }

    public function ListarUsuarios()
    {
        $users = $this->userModel->Tabla();
        require 'views/users/index.php';
    }

    public function CrearUsuario()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'nombre' => $_POST['nombre'],
                'email' => $_POST['email']
            ];
            $this->userModel->Crear($data);
            header('Location: index.php');
        } else {
            require 'V/formulario.php';
        }
    }

    public function EditarUsuarios()
    {
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

    public function EliminarUsuarios()
    {
        $id = $_GET['id'];
        $this->userModel->Eliminar($id);
        header('Location: index.php');
    }
}
