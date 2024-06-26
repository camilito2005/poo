<?php
$DB_HOST=('localhost');
$DB_NAME=('nombre_base_de_datos');
$DB_USER=('usuario');
$DB_PASS=('contraseña');

try {
    $pdo = new PDO("mysql:host=" . $DB_HOST . ";dbname=" . $DB_NAME, $DB_USER, $DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
?>