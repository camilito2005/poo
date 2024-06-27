
<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="../css/editar.css">
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
</head>
<body>
    <div class="titulo">
        <h1>Editar Usuario</h1>
    </div>
    
    <div class="container">
        <form action="index.php?action=edit&id=<?php echo $user['id']; ?>" method="POST">

            Nombre: <input type="text" class="cajas" name="nombre" value="<?php echo $user['nombre']; ?>"><br>

            Email: <input class="cajas"type="email" name="email" value="<?php echo $user['email']; ?>"><br>

            Contraseña: <input class="cajas"type="password" name="contraseña" value="<?php echo $user['contraseña']; ?>"><br>

            <input class="boton" type="submit" value="Guardar">

        </form>
    </div>
    <a href="../V/index.php">registros</a>

    
</body>
</html>