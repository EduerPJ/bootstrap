<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bootstrap extends CI_Controller {
  function __construct()  {
    parent::__construct();
  }

  public function index() {
    $data = [
      'headers' => $this->load->view('layouts/header', '', true),
      'footer' => $this->load->view('layouts/footer', '', true),
    ];

    $this->load->view('bootstrap/index', $data);
  }
}