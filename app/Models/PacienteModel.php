<?php 
namespace App\Models;

use CodeIgniter\Model;

class PacienteModel extends Model{
    protected $table      = 'paciente';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_Paciente';
    protected $allowedFields = [
        'nombre',
        'apellido', 
        'peso',
        'altura_cm',
        'edad',
        'dni',
        'historia_clinica',
        'id_usuario',
        'id_tipo_sangre',
        'id_obra'
    ];

    public function insertarPaciente($data){
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }
    public function getNameObra($id){
        $query = $this->query('Select nombre from  obra_social where id = <?= $id ?>');
    }
    public function getPaciente($id = false)
    {
        if ($id === false) {
            // return $this->where('id_obra_social', $data['obras'['id']]);
            return $this->findAll() ? $this->findAll() : [];
        } else {
            return $this->where(['id' => $id])->first() ? $this->where(['id' => $id])->first() : [];
        }
    }
}