<?php 
namespace App\Controllers;

use CodeIgniter\Controller; 
use App\Models\UsuarioModelo;


class RegisterControlador extends Controller{
    public function index(){
        return view('register');
    }
   public function register(){
        $UsuarioModelo = new UsuarioModelo(); 
$data = [
        $name = $this->request->getPost('nombre'), 
        $email = $this->request->getPost('email'), 
        $password = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT) 
];
        $datosmodel->insertData($data); 
        return redirect()->to(base_url('login'));
        
        
    }
}