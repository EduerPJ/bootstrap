<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Styde extends CI_Controller {

  function __construct()  {
    parent::__construct();
    $this->load->model('styde_model');
  }

  public function index() {
    $datos = [];
    $this->styde_model->setName('Eduer');
    $this->styde_model->setNickname('Leidy');
    $this->styde_model->setNickname('Emily');
    // $this->styde_model->setNickname('Samuel');
    $data['header'] = $this->load->view('layouts/header', $datos, true);
    $data['name'] = $this->styde_model->getName();
    $data['nickname'] = $this->styde_model->getNickname();
    $data['footer'] = $this->load->view('layouts/footer', $datos, true);
    $data['age'] = $this->styde_model->getAge();
    $this->load->view('styde/styde', $data);
  }
}