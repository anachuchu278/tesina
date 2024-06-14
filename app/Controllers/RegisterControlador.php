<?php 
namespace App\Controllers;

use CodeIgniter\Controller; 
use App\Models\UsuarioModelo;

class RegisterControlador extends Controller{ 
    public function index() {
        return view('registerVista');

    }
    public function registrarse() { 
        $UsuarioModelo = new UsuarioModelo();
        $name = $this->request->getPost('nombre'); 
        $email = $this->request->getPost('email'); 
        $password = password_hash($this->request->getPost('password'),PASSWORD_DEFAULT); 
        $id_rol = 1;

        $data= [
            'nombre'=>$name,
            'email'=>$email,
            'password'=>$password, 
            'id_rol'=>$id_rol
        ]; 

        $UsuarioModelo->insertData($data);  
        return view('loginVista');
    }
} 
