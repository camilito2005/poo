
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class UsuarioModel {
    private $db;

    public function insertarUsuario($nombre, $email , $contraseña) {
        include '../conexion.php';

        $db = new PDO('host=165.232.121.46 port=5432 dbname=poo user=smartinfo password=smartinfo');
        
        /*$query = "INSERT INTO usuarios (nombre, correo, contraseña) 
        VALUES (:nombre, :email, :contraseña)";*/

        $query= pg_query($conexion, "INSERT INTO usuarios (nombre,correo,contraseña) VALUES ('" . pg_escape_string($_POST['nombre']) . "','" . pg_escape_string($_POST['email']) . "','" .  pg_escape_string ($_POST['contraseña']). " )");

        if (!$query) {
            echo "Query: Un error ha occurido.\n";
            exit;
          }


        /*$stmt = $db->prepare($query);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':contraseña', $contraseña);*/

        return $stmt->execute();
        
    }

    
}

?>