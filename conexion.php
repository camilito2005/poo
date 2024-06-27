<?php

$DB_HOST = ('localhost');
$PORT = ('5432');
$DB_NAME = ('poo');
$DB_USER = ('smartinfo');
$DB_PASS = ('smartinfo');

$conn = pg_connect("host=$DB_HOST port=$PORT dbname=$DB_NAME user=$DB_USER password=$DB_PASS");
print_r($conn);
die;

if (!$conn) {
    echo "Error: No se pudo conectar a PostgreSQL.\n";
} else {
    echo "Conexión exitosa a PostgreSQL.\n";
    // Aquí puedes ejecutar consultas u otras operaciones en la base de datos
}

/*try {
    $pdo = new PDO("mysql:host=" . $DB_HOST . ";dbname=" . $DB_NAME, $DB_USER, $DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}*/
