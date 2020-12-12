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

  public function obtenerCursos() {
    $query = $this->db->get('cursos');

    if ($query->num_rows() > 0) {
      return $query;
    } else {
      return false;
    }
  }

  public function obtenerCurso($id)
  {
    $this->db->where('id_curso', $id);
    $query = $this->db->get('cursos');

    if ($query->num_rows() > 0) {
      return $query;
    } else {
      return false;
    }
  }
}