<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$conexion = pg_connect("host=localhost port=5432 dbname=poo user=smartinfo password=smartinfo");

if ($conexion) {
    echo "Conexión exitosa a la base de datos\n", die;
} else {
    if (!$conexion) {
        echo "Error: No se ha podido conectar a la base de datos\n", die;
    }
    pg_close($conexion);
}
?>