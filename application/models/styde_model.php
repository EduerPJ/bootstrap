<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Styde_model extends CI_Model {

  protected $name;
  protected $lastName;
  protected $nickname;
  protected $changedNickname = 0;

  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function getName()
  {
    return $this->name;
  }

  public function getLastName()
  {
    return $this->lastName;
  }

  public function getNickname()
  {
    return $this->nickname;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function setLastName($lastName)
  {
    $this->lastName = $lastName;
  }

  public function setNickname($nickname)
  {
    if ($this->changedNickname >= 2) {
      throw new Exception(
        'No puedes cambiar el nickname más de 2 veces'
      );
    }
    $this->nickname = $nickname;
    $this->changedNickname++;
  }
}