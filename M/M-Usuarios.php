<?php

class Usuarios {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function Tabla() {
        $stmt = $this->pdo->query("SELECT * FROM usuarios");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function Ver($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM usuarios WHERE id_usuarios = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function Crear($data) {
        $stmt = $this->pdo->prepare("INSERT INTO usuarios (nombre, correr,contraseña) VALUES (?, ?, ?)");
        $stmt->execute([$data['nombre'], $data['email'],$data['contraseña']]);
        return $this->pdo->lastInsertId();
    }

    public function Actualizar($id, $data) {
        $stmt = $this->pdo->prepare("UPDATE usuarios SET nombre = ?, correo = ? , contraseña = ?  WHERE id_usuarios = ?");
        $stmt->execute([$data['nombre'], $data['email'] , $data['contraseña'], $id]);
        return true;
    }

    public function Eliminar($id) {
        $stmt = $this->pdo->prepare("DELETE FROM usuarios WHERE id_usuarios = ?");
        $stmt->execute([$id]);
        return true;
    }
}
?>