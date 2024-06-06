<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\TurnoModel;
use App\Models\PacienteModel;
use App\Models\UsuarioModelo;
use App\Models\PagoModel;
use App\Models\EstadoModel;
class TurnoControlador extends Controller{
    public function index(){
        $session = \Config\Services::session();
        if ($session->get('id_Usuario')) {
            $turnoModel = new TurnoModel();
            $pacienteModel = new PacienteModel();
            $usuarioModel = new UsuarioModelo();
            $estadoModel = new EstadoModel();
            
            $usuarios = $usuarioModel->findAll(); //Renombrar
            $userId = $session->get('id_Usuario');
            $user = $pacienteModel->find($userId);
            
            $turnos = $turnoModel->getTurnosPorPaciente($userId);
            
            $data['usuario'] = $user;
            $data['turnos'] = $turnos;
            
            // echo view('layout/navbar.css');
            return view('turnoVista.php', $data);
        } else {
            // Usuario no logueado, redirige a la página de inicio de sesión u otra página
            return redirect()->to('register');
        }
    }
    public function newVista(){
        $session = \Config\Services::session();
        if ($session->get('id_Usuario')) {
            $turnoModel = new TurnoModel();
            $pacienteModel = new PacienteModel();
            $usuarioModel = new UsuarioModelo();
            // $usuario = $usuarioModel->getMedicos();
        } else {
            return redirect()->to('register');
        }
    }
    public function new(){
        $session = \Config\Services::session();
        if ($session->get('id_Usuario')) {
            $turnoModel = new TurnoModel();
            $pacienteModel = new PacienteModel();
            $usuarioModel = new UsuarioModelo();

            $data = [
                'id_paciente' => $this->request->getPost('id_paciente'),
            ];
        
        } else {
            // Usuario no logueado, redirige a la página de inicio de sesión u otra página
            return redirect()->to('register');
        }
    }
}