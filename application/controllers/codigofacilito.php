<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CodigoFacilito extends CI_Controller {
  function __construct()  {
    parent::__construct();
    $this->load->helper('mihelper');
  }

  public function index() {
    $this->load->library('Menu', array('Inicio', 'Contacto', 'Cursos'));

    $data = [
      'mi_menu' => $this->menu->construirMenu(),
      'title' => 'Codigo Facilito',
      'firstname' => 'Eduer',
      'lastname' => 'Pallares Jiménez'
    ];

    $this->load->view('codigofacilito/bienvenido', $data);
  }

  public function soyExepcional() {
    $this->load->library('Menu', array('Inicio', 'Contacto', 'Cursos'));
    $data = [
      'mi_menu' => $this->menu->construirMenu(),
      'title' => 'Codigo Facilito',
      'firstname' => 'Eduer',
      'lastname' => 'Pallares Jiménez'
    ];
    $this->load->view('layouts/header', $data);
    $this->load->view('codigofacilito/soygenial', $data);
    $this->load->view('layouts/footer', $data);
  }
}