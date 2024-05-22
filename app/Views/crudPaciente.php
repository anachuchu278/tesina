<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de pacientes</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pacientes as $paciente): ?>
                <tr>
                    <td><?= $paciente['nombre']; ?></td>
                    <td><?= $paciente['apellido']; ?></td>
                    <td><?= $paciente['id_obra']; ?></td>
                    <td><?= $paciente['apellido']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="newPaciente">Añadir</a>
</body>
</html>