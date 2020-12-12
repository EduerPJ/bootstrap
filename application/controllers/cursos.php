<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cursos extends CI_Controller {
  function __construct()  {
    parent::__construct();
    $this->load->helper('form');
    $this->load->library('Menu', array('Inicio', 'Contacto', 'Cursos'));
    $this->load->model('codigofacilito_model');
  }
public function index()
{
  $data = [
    'segmento' => $this->uri->segment(3),
    'mi_menu' => $this->menu->construirMenu(),
    'title' => 'Codigo Facilito',
    'firstname' => 'Eduer',
    'lastname' => 'Pallares Jiménez'
  ];

  if (!$data['segmento']) {
    $data['cursos'] = $this->codigofacilito_model->obtenerCursos();
  } else {
    $data['cursos'] = $this->codigofacilito_model->obtenerCurso($data['segmento']);
  }


  $this->load->view('layouts/header', $data);
  $this->load->view('cursos/cursos', $data);
  $this->load->view('layouts/footer', $data);

}
public function nuevo(){
  $data = [
    'mi_menu' => $this->menu->construirMenu(),
    'title' => 'Codigo Facilito',
    'firstname' => 'Eduer',
    'lastname' => 'Pallares Jiménez'
  ];

    $this->load->view('layouts/header', $data);
    $this->load->view('cursos/formulario', $data);
    $this->load->view('layouts/footer', $data);

  }

  public function recibirDatos(){
    $data = array(
      'nombre' => $this->input->post('nombre'),
      'videos' => $this->input->post('videos')
    );
    $this->codigofacilito_model->crearCurso($data);
  }

}