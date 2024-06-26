
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
</head>
<body>
    <h1>Editar Usuario</h1>
    <form action="index.php?action=edit&id=<?php echo $user['id']; ?>" method="POST">
        Nombre: <input type="text" name="nombre" value="<?php echo $user['nombre']; ?>"><br>
        Email: <input type="email" name="email" value="<?php echo $user['email']; ?>"><br>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>