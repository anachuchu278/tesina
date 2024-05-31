<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?= base_url('css/crud.css');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turnos</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Medico</th>
                <th>Especialidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($turnos as $turno) :?>
                <tr>
                    <td><?= $turno['fecha_hora'];?></td>
                    <td>
                        <a href="<?= site_url('editarTurno/'. $turno['id_Turno']);?>">Reprogramar Turno</a>
                        <a href="<?= site_url('cancelarTurno/'. $turno['id_Turno']);?>">Cancelar Turno</a>
                    </td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
    <div class="box-new">
        <button class="new" href="newTurno">Pedir Turno</button>
    </div>
</body>
</html>