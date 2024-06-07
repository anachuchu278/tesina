<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\PacienteModel;
use App\Models\TurnoModel;

class RecepcionControlador extends BaseController{
    public function index(){
        $session = \Config\Services::session();
        if ($session->get('user_id')) {
            $rol= $session->get('user_rol');
            if ($rol == 3 && $rol == 2) {
                $pacienteModel = new PacienteModel();
                $turnoModel = new TurnoModel();
                $data['pacientes'] = $pacienteModel->findAll();
                $data['turnos'] = $turnoModel->findAll();
    
                echo view('layout/navbar.css');
                return view('Recepcion');
            } else {
                return redirect()->to('#');
            }
        } else {
            return redirect()->to('/');
        }
    }
}