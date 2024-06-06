<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\TurnoModel;
use App\Models\PacienteModel;
use App\Models\UsuarioModelo;
use App\Models\PagoModel;
use App\Models\EstadoModel;
use Dompdf\Dompdf;
class TurnoControlador extends Controller{
    // En el controlador

public function index(){
    $session = \Config\Services::session();
    if ($session->get('id_Usuario')) {
        $turnoModel = new TurnoModel();
        $pacienteModel = new PacienteModel();
        $usuarioModel = new UsuarioModelo();
        $estadoModel = new EstadoModel();
        
        $userId = $session->get('id_Usuario');
        $user = $pacienteModel->find($userId);
        
        $turnos = $turnoModel->getTurnosPorPaciente($userId);
        
        // Cargar la información de especialidad para cada usuario en los turnos
        foreach ($turnos as $turno) {
            $usuario = $usuarioModel->find($turno->id_usuario);
            $turno->especialidad = $usuario->especialidad;
        }
        $data['usuario'] = $user;
        $data['turnos'] = $turnos;
        
        echo view('layout/navbar.php');
        return view('turnoVista.php', $data);
    } else {
        // Usuario no logueado, redirige a la página de inicio de sesión u otra página
        return redirect()->to('/');
    }
}

    public function newVista(){
        $session = \Config\Services::session();
        if ($session->get('id_Usuario')) {
            $turnoModel = new TurnoModel();
            $pacienteModel = new PacienteModel();
            $usuarioModel = new UsuarioModelo();
            $userId = $session->get('id_Usuario');
            // $usuario = $usuarioModel->getMedicos();
            $user = $pacienteModel->getPaciente($userId);
            
            $data['usuario'] = $user;
            echo view('layout/navbar.php');
            return view('TurnoNew.php', $data);
        } else {
            return redirect()->to('/');
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
    public function PDF($id){ 
        $dompdf = new Dompdf();
        $turnoModelo = new TurnoModel();
        $turno = $turnoModelo->asObject()->find($id);
        $query = $turnoModelo->asObject()->select("t.*, u.email, u.especialidad")
                                                                // ->join("turno as t", "t.id_Turno ");
                                                                ->join("usuarios as u", "t.id_usuario = id_Usuario");
        $data = [
            'turno' => $turno,
            'turnoPDF' => $query->where('id_Turno', $id)
        ];
        $dompdf->loadHTML(view('layout/turno-pdf.php', $data));
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream();
    }
}