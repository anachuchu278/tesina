<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?= base_url('css/login.css')?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<div class="login-form">
        <h2>Iniciar sesión</h2>
        <form method="post" action="login1">
            <label for="email">Correo electrónico</label>
            <input type="email" id="email" name="email" placeholder="Introduce tu correo electrónico" required><br>
            
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" placeholder="Introduce tu contraseña" required><br>
            
            <button type="submit">Iniciar sesión</button>
        </form>
    </div>
</body>
</html>