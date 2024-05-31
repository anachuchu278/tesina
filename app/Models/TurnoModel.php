<?php 
namespace App\Models;

use CodeIgniter\Model;

class TurnoModel extends Model{
    protected $table      = 'turno';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_Turno';
    protected $allowedFields =[
        'fecha_hora',
        'codigo_turno',
        'id_usuario',
        'id_paciente',
        'id_estado',
        'id_pago'
    ];
    public function getTurnosPorPaciente($userId)
    {
        return $this->where('id_Turno', $userId)->findAll();
    }
}
