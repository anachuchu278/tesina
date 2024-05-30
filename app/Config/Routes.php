<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// $routes->get('/', 'Home::index');
//Paciente
$routes->get('crudPaciente', 'PacienteControlador::index');//crud
$routes->get('newPacienteView', 'PacienteControlador::newVista');//vista new
$routes->post('newPaciente', 'PacienteControlador::new'); /*funcion para añadir paciente */
$routes->get('editPaciente/(:num)', 'PacienteControlador::editView/$1'); //vista editar paciente 
$routes->post('editarPaciente', 'PacienteControlador::edit'); /* funcion para editar paciente */
$routes->get('eliminarPaciente/(:num)', 'PacienteControlador::delete/$1'); /*Elimina el paciente X */
//Usuario
$routes->get('/','RegisterControlador::index'); 
$routes->post('register', 'RegisterControlador::registrarse'); 
$routes->get('login', 'RegisterControlador::registrarse'); 
$routes->post('login1', 'LoginControlador::loguearse'); //Loguea
$routes->get('loginVista','LoginControlador::index');
// $routes->get('test', 'LoginControlador::loguearse');