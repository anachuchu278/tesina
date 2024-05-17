<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form method='post' action="<?php echo base_url('register') ?>">Register</form>
        <div>
            <label for="email">Correo Electronico</label>
            <input name='email' type="text" id='email'>
        </div> 
        <div>
            <label for="name">nombre</label>
            <input name='name'type="text" id='name'>
        </div>
        <div>
            <label for="password">Contraseña</label>
            <input name='password'type="text" id='password'>
        </div> 
    </form>
    <div>
        <button type='submit' href='<?php echo base_url('register')?>'>Enviar</button>
    </div> 
</body>
</html>