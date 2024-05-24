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
                <th>DNI</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>Altura(cm)</th>
                <th>Tipo de sangre</th>
                <th>RH</th>
                <th>Obra</th>
                <th>Usuario</th>
                <th>Editar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pacientes as $paciente): ?>
                <tr>
                    <td><?= $paciente['dni']; ?></td>
                    <td><?= $paciente['nombre']; ?></td>
                    <td><?= $paciente['apellido']; ?></td>
                    <td><?= $paciente['edad']; ?></td>
                    <td><?= $paciente['altura_cm']; ?></td>
                    <td><?= $paciente['id_tipo_sangre']; ?></td>
                    <td><?= $paciente['RH_tipo_sangre']; ?></td>
                    <td><?= $paciente['id_obra']; ?></td>
                    <td><?= $paciente['id_usuario']; ?></td>
                    <td>
                        <a href="<?= site_url('editarPaciente/'. $paciente['id_Paciente']); ?>">Editar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="newPaciente">Añadir</a>
</body>
</html>