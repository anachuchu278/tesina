<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

















//Paciente
$routes->get('crudPaciente', 'PacienteControlador::index');//crud
$routes->get('newPaciente', 'PacienteControlador::newVista');//vista new
$routes->post('newPaciente', 'PacienteControlador::new'); /*funcion para añadir paciente */
$routes->get('editPaciente/(:num)', 'PacienteControlador::editView/$1'); //vista editar paciente 
$routes->post('editarPaciente', 'PacienteControlador::edit'); /* funcion para editar paciente */