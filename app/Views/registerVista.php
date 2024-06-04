<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?= base_url('css/register.css') ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
<div class="register-form">
        <h2>Registro</h2>
        <form method="post" action="<?= base_url('register')?>" >
            <label for="nombre">Nombre de usuario</label>
            <input type="text" id="username" name="nombre" placeholder="Introduzca su nombre" required><br>
            
            <label for="email">Correo electrónico</label>
            <input type="email" id="email" name="email" placeholder="Introduzca su email"required><br>
            
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" placeholder="Introduzca su contraseña" required><br>
            
            <button type="submit" href="<?= base_url('register') ?>">Registrarse</button>
        </form><br>
        <button href="loginVista" >Login</button>
    </div>
</body>
</html>