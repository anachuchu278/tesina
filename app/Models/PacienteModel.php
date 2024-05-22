<?php 
namespace App\Models;

use CodeIgniter\Model;

class PacienteModel extends Model{
    protected $table      = 'paciente';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nombre',
        'apellido', 
        'id_usuario',
        'id_tipo_sangre',
        'id_obra',
        'historia_clinica'
    ];

    public function insertarPaciente($datos){
        $this->db->table($this->table)->insert($datos);
        return redirect()->to('/crudPaciente');
    }
    public function getPaciente($id = false)
    {
        if ($id === false) {
            return $this->findAll() ? $this->findAll() : [];
        } else {
            return $this->where(['id' => $id])->first() ? $this->where(['id' => $id])->first() : [];
        }
    }
}