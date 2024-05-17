<?php 
namespace App\Models;

use CodeIgniter\Model;

class UsuarioModelo extends Model{
    protected $table      = 'usuario';
    
    protected $primaryKey = 'id_usuario'; 

    protected $useAutoIncrement = true; 

    protected $allowedFields = ['nombre','password','email','id_rol','id_especialidad','id_horamed']; 

    //protected $createdFields = 'created-at'; 
    public function insertData($data)
    {
        $this->db->table($this->table)-> insert($data);
        return redirect()->to('index');
    }
}