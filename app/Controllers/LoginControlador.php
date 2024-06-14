<?php 
namespace App\Controllers;

use CodeIgniter\Controller; 
use App\Models\UsuarioModelo;
class LoginControlador extends BaseController{ 
    public function index(){
        return view('loginVista'); 
    }
    public function loguearse(){
        $session = \Config\Services::session();
        $result = new UsuarioModelo();

        $email = $this->request->getPost('email'); 
        $password = $this->request->getPost('password'); 

        $user = $result->where('email',$email)->first(); 
        
        if($user){
            if(password_verify($password, $user['password'])){
                $session->set('user_rol', $user['id_rol']);
                $session->set('user_id', $user['id_Usuario']); 
                return redirect()->to('crudPaciente');
            }
            else {
                return redirect()->back();
            }
        }
    }
}
