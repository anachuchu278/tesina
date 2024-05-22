<?php 
namespace App\Controllers;

use App\Models\UsuarioModelo;
use CodeIgniter\Controller;
use App\Models\PacienteModel;
use App\Models\ObraSModel;
use App\Models\TipoSModel;
class PacienteControlador extends BaseController{
    public function index(){
        $paciente = new PacienteModel();
        $data['pacientes'] = $paciente->getPaciente(); 
        echo view('crudPaciente', $data);
    }
    public function newVista(){
        $obra = new ObraSModel();
        $tiposan = new TipoSModel();
        $usuario = new UsuarioModelo();
        $data['obras'] = $obra->findAll();
        $data['usuarios'] = $usuario->findAll();
        $data['tiposans'] = $tiposan->findAll();
        return view('newPaciente', $data);
    }
    public function new(){
        $paciente = new PacienteModel();
        $obra = new ObraSModel();
        $tiposan = new TipoSModel();
        $usuario = new UsuarioModelo();
        $data = [
            'usuario' => $this->getPost('id_usuario'),
            'nombre' => $this->getPost('nombre'),
            'apellido' => $this->getPost('apellido'),
            'id_obra' => $this->getPost('id_obra'),
            'id_tipo_sangre' => $this->getPost('id_tipo_sangre'),
            
        ];
        if (isset($_POST['rh'])) {
            $data['rh'] = 1;
        }
        else {
            $data['rh'] = 0;
        }

        echo view('crudPaciente', $data);
    }
}
