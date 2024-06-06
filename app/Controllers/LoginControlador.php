<?php 
namespace App\Controllers;

use CodeIgniter\Controller; 
use App\Models\UsuarioModelo;
class LoginControlador extends BaseController{ 
    public function index(){
        return view('LoginVista'); 
    }
    public function loguearse(){
        $session = \Config\Services::session();
        $result = new UsuarioModelo();

        $email = $this->request->getPost('email'); 
        $password = $this->request->getPost('password'); 

        $user = $result->where('email',$email)->first(); 
        
        if($user){
            if(password_verify($password, $user['password'])){
                $session->set('id_Usuario',$user['id_Usuario']); 
                return redirect()->to('crudPaciente');
            }
            else {
                return redirect()->back();
            }
        }
        
    }
}