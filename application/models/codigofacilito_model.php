<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Codigofacilito_model extends CI_Model {
  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function crearCurso($data)
  {
    $this->db->insert('cursos', array('nombre_curso' => $data['nombre'], 'videos_curso' => $data['videos']));
  }
}