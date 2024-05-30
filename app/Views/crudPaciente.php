<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de pacientes</title>
</head>
<body>
    <!-- TODO Añadir navbar -->
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
                <th>Eliminar</th>
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
                    <td><?= $paciente['tipo_sangre']; ?></td>
                    <td><?= $paciente['RH_tipo_sangre']; ?></td>
                    <td><?= $paciente['obra']; ?></td>
                    <td><?= $paciente['usuario']; ?></td>
                    <td>
                        <a href="<?= site_url('editPaciente/'. $paciente['id_Paciente']); ?>">Editar</a>
                        <a href="<?= site_url('eliminarPaciente/'. $paciente['id_Paciente']); ?>">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="newPacienteView">Añadir</a>
</body>
</html>