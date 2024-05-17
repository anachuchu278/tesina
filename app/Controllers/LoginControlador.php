<?php 
namespace App\Controllers;

use CodeIgniter\Controller; 
use App\Models\UsuarioModelo;

class LoginControlador extends Controller{
    public function index(){
        return view('loginVIsta');
    }
}