<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Paciente</title>
</head>
<body>
    <form action="newPaciente" method="POST">
        <label for="">Usuario:</label><br>
        <select name="usuario" id="id_usuario" required>
            <?php foreach ($usuarios as $usuario): ?> 
                <option value=""><?= $usuario['nombre'] ?></option>
            <?php endforeach; ?>
        </select> <br>
        <label for="">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br>
        <label for="">Apellido:</label><br>
        <input type="text" id="apellido" name="apellido" required><br>
        <label for="">Obra:</label><br>
        <select name="obra" id="id_obra" name="id_obra" required>
            <?php foreach ($obras as $obra): ?> 
                <option value="<?= $obra['id'] ?>"><?= $obra['nombre'] ?></option>
            <?php endforeach; ?>
        </select> <br>
        <label for="">Tipo de sangre:</label>
        <select name="tiposan" id="id_tipo_sangre" required>
            <?php foreach ($tiposans as $tiposan): ?> 
                <option value="<?= $tiposan['id'] ?>"><?= $tiposan['tipo'] ?></option>
            <?php endforeach; ?>
        </select> <br>
        <label for="">RH positivo:</label><input type="checkbox" name="rh" value="1" id="rh_tipo"><br>
        <input type="submit" value="Añadir">
    </form>
</body>
</html>