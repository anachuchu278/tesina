<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><? if($id == 0){ echo "Añadir Paciente";} else{ echo "Editar". $pacientes['nombre'];}; ?></title>
</head>
<body>
    <form action="newPaciente" method="POST">
        <label for="">Usuario:</label><br>
        <select name="id_Usuario" id="id_Usuario" required>
            <?php foreach ($usuarios as $usuario): ?> 
                <option value="<?= $usuario['id_Usuario'] ?>"><?= $usuario['nombre'] ?></option>
            <?php endforeach; ?>
        </select> <br>
        <label for="">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br>
        <label for="">Apellido:</label><br>
        <input type="text" id="apellido" name="apellido" required><br>
        <label for="">DNI:</label><br>
        <input type="number" name="dni" id="dni"><br>
        <label for="">Edad:</label><br>
        <input type="number" name="edad" id="edad"><br>
        <label for="">Altura(cm):</label><br>
        <input type="number" name="altura_cm" id="altura_cm"><br>
        <label for="">Peso:</label><br>
        <input type="number" name="peso" id="peso"><br>
        <label for="">Historia clinica:</label><br>
        <input type="number" name="historia_clinica" id="historia_clinica"><br>
        <label for="">Obra:</label><br>
        <select  id="id_obra" name="id_obra" required>
            <?php foreach ($obras as $obra): ?> 
                <option value="<?= $obra['id'] ?>"><?= $obra['nombre'] ?></option>
            <?php endforeach; ?>
        </select> <br>
        <label for="">Tipo de sangre:</label>
        <select name="id_tipo_sangre" id="id_tipo_sangre" required>
            <?php foreach ($tiposans as $tiposan): ?> 
                <option value="<?= $tiposan['id'] ?>"><?= $tiposan['tipo'] ?></option>
            <?php endforeach; ?>
        </select> <br>
        <label for="">RH positivo:</label><input type="checkbox" name="rh" value="1" id="rh_tipo"><br>
        <input type="submit" value="Añadir">
    </form>
</body>
</html>