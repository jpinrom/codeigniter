<?php

class Articulos_model extends CI_Model {

  public function __construct()
  {
      parent::__construct();
  }

  //Listado de articulos
  public function lista_articulos()
  {
    $consulta = $this->db->get('articulos');
    return $consulta->result();

  }

}

?>
