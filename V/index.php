<!-- views/users/index.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="../css/tabla.css">
    <meta charset="UTF-8">
    <title>Listado de Usuarios</title>
</head>
<body>
    <h1>Listado de Usuarios</h1>
    <a href="./formulario.php">Nuevo Usuario</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>correo</th>
                <th>contraseña</th>

                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['nombre']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td><?php echo $user['contraseña']; ?></td>
                <td>
                    <a href="index.php?action=edit&id=<?php echo $user['id']; ?>">Editar</a>
                    <a href="index.php?action=delete&id=<?php echo $user['id']; ?>">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
       
    </table>
</body>
</html>