
<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="./css/formulario.css">
    <meta charset="UTF-8">
    <title>Crear Nuevo Usuario</title>
</head>
<body>

    <div class="titulo">
        <h1>Crear Nuevo Usuario</h1>
    </div>

    <div class="container"> 
        <form action="./C/C-Usuarios.php" method="POST">
            Nombre: <input class="cajas" type="text" name="nombre"><br>
            Email: <input class="cajas" type="email" name="email"><br>
            Contraseña <input class="cajas" type="password" name="contraseña"><br>

            <input class="boton" type="submit" name="enviar" value="Guardar">
        </form>
    </div>
    

    <a href="./V/index.php">registros</a>
</body>
</html>