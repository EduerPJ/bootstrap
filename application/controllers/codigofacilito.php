<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CodigoFacilito extends CI_Controller {
  function __construct()  {
    parent::__construct();
    $this->load->helper('form');
    $this->load->library('Menu', array('Inicio', 'Contacto', 'Cursos'));
    $this->load->model('codigofacilito_model');
  }

  public function index() {
    $data = [
      'mi_menu' => $this->menu->construirMenu(),
      'title' => 'Codigo Facilito',
      'firstname' => 'Eduer',
      'lastname' => 'Pallares Jiménez'
    ];

    $this->load->view('codigofacilito/bienvenido', $data);
  }

  public function soyExepcional() {
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

  public function sendEmail() {
    $this->load->library('email');
    $configuraciones['mailtype'] = 'html';
    $configuraciones['smtp'] = 'gmail';
    $this->email->initialize($configuraciones);
    $this->email->from('eduer@gmail.com', 'Eduer Pallares J.');
    $this->email->to('leidy@gmail.com');
    $this->email->cc('otrocorreo@gmail.com');

    $this->email->subject('Probando CodeIgniter');
    $this->email->message('<p>Cuerpo del mensaje...</p>');

    if ($this->email->send()) {
      echo 'Correo enviado';
    } else {
      echo $this->email->print_debugger();
    }
  }
}