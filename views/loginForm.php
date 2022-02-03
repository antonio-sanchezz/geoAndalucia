<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
</head>
<body>
    <form action="?controller=usuarios&action=loginCheck" method="POST">
        <label for="username">Usuario</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Contraseña</label><br>
        <input type="password" id="password" name="password"><br><br>
        <div class="error">
            <p><?php echo $error;?></p>
        </div>
        <input type="submit" value="Entrar">
    </form>
</body>
</html>