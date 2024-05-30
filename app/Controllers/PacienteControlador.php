<?php 
namespace App\Controllers;

use App\Models\UsuarioModelo;
use CodeIgniter\Controller;
use App\Models\PacienteModel;
use App\Models\ObraSModel;
use App\Models\TipoSModel;
class PacienteControlador extends BaseController{
    public function index(){ 
        $usuario = new UsuarioModelo();
        $obra = new ObraSModel();
        $tiposan = new TipoSModel();
        $model = new PacienteModel();
        $pacientes = $model->findAll(); 
        foreach ($pacientes as &$paciente) { // Obtener el nombre en lugar de las IDs    
            $tipoSangre = $tiposan->find($paciente['id_tipo_sangre']);
            $paciente['tipo_sangre'] = $tipoSangre['tipo'];

            $obra = $obra->find($paciente['id_obra']);
            $paciente['obra'] = $obra['nombre'];

            $usuario = $usuario->find($paciente['id_usuario']);
            $paciente['usuario'] = $usuario['email'];

            if ($paciente['RH_tipo_sangre'] == '1') {
                $paciente['RH_tipo_sangre'] = '+';
            } else {
                $paciente['RH_tipo_sangre'] = '-';
            }
        }
        return view('crudPaciente', ['pacientes' => $pacientes]);
    }
    public function newVista(){//Vista donde se añade un paciente
        $obra = new ObraSModel();
        $tiposan = new TipoSModel();
        $usuario = new UsuarioModelo();
        $data['obras'] = $obra->findAll();
        $data['usuarios'] = $usuario->findAll();
        $data['tiposans'] = $tiposan->findAll();
        return view('NewEditPaciente', $data);
    }
    public function new(){//Funcion que envia los datos a la BDD
        $paciente = new PacienteModel();
        $data = [
            'id_usuario' => $this->request->getPost('id_Usuario'),
            'nombre' => $this->request->getPost('nombre'),
            'apellido' => $this->request->getPost('apellido'),
            'dni' => $this->request->getPost('dni'),
            'edad' => $this->request->getPost('edad'),
            'altura_cm' => $this->request->getPost('altura_cm'),
            'peso' => $this->request->getPost('peso'),
            'historia_clinica' => $this->request->getPost('historia_clinica'),
            'id_obra' => $this->request->getPost('id_obra'),
            'id_tipo_sangre' => $this->request->getPost('id_tipo_sangre')
        ];
        if (isset($_POST['rh'])) {
            $data['RH_tipo_sangre'] = 1;
        }
        else {
            $data['RH_tipo_sangre'] = 0;
        }
        $paciente->insertarPaciente($data);
        return redirect('')->to('crudPaciente');
    }
    public function editView($id){
        $obra = new ObraSModel();
        $tiposan = new TipoSModel();
        $usuario = new UsuarioModelo();
        $data['obras'] = $obra->findAll();
        $data['usuarios'] = $usuario->findAll();
        $data['tiposans'] = $tiposan->findAll();
        $paciente = new PacienteModel;
        $data['pacientes'] = $paciente->getPaciente($id);

        return view('NewEditPaciente', $data);
    }
    public function edit($id){
        $paciente = new PacienteModel;
        $id = $paciente->getPaciente($id);
        $data = [
            'id_usuario' => $this->request->getPost('id_Usuario'),
            'nombre' => $this->request->getPost('nombre'),
            'apellido' => $this->request->getPost('apellido'),
            'dni' => $this->request->getPost('dni'),
            'edad' => $this->request->getPost('edad'),
            'altura_cm' => $this->request->getPost('altura_cm'),
            'peso' => $this->request->getPost('peso'),
            'historia_clinica' => $this->request->getPost('historia_clinica'),
            'id_obra' => $this->request->getPost('id_obra'),
            'id_tipo_sangre' => $this->request->getPost('id_tipo_sangre')
        ];
        $paciente->editPaciente($id,$data);
        return redirect('')->to('editPaciente');
    }
    public function delete($id)
    {
    $paciente = new PacienteModel();
    $paciente->deletePaciente($id); 
    return view('crudPaciente');
    }
}
