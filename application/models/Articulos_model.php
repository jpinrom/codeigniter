<?php

class Articulos_model extends CI_Model {

  public function __construct()
  {
      parent::__construct();
  }

  //Listado de articulos
  public function lista_articulos()
  {
    $this->db->order_by('id_articulo','desc');
    $consulta = $this->db->get('articulos');
    return $consulta->result();

  }

/*  public function detalle_articulo($id_articulo)
  {
    $this->db->where('id_articulo',$id_articulo);
    $consulta =  $this->db->get('articulos');
    return $consulta->row();
  }*/


/*  public function detalle_articulo($nombre_articulo)
  {
    $this->db->where('nombre',$nombre_articulo);
    $consulta =  $this->db->get('articulos');
    return $consulta->row();
  }*/

  public function detalle_articulo($url_articulo)
    {
      $this->db->where('url_articulo',$url_articulo);
      $consulta =  $this->db->get('articulos');
      return $consulta->row();
    }

}
?>
