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

  public function reto()
  {
      $data = [
        'headers' => $this->load->view('layouts/header', '', true),
        'footer' => $this->load->view('layouts/footer', '', true),
      ];

      $this->load->view('bootstrap/grilla', $data);
    }

    public function grillareto2() {
      $data = [
        'headers' => $this->load->view('layouts/header', '', true),
        'footer' => $this->load->view('layouts/footer', '', true),
      ];

      $this->load->view('bootstrap/grillareto2', $data);
    }

    public function grillareto3() {
      $data = [
        'headers' => $this->load->view('layouts/header', '', true),
        'footer' => $this->load->view('layouts/footer', '', true),
      ];

      $this->load->view('bootstrap/grillareto3', $data);
  }
}