<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('Articulos_model');


	}
	public function index()
	{

		$datos['articulos'] = $this->Articulos_model->lista_articulos();
    $this->load->view('index',$datos);
	}

/*	public function detalle_articulo($id_articulo)
	{

		$id_limpio = $this->security->xss_clean($id_articulo);
		$datos['detalle'] = $this->Articulos_model->detalle_articulo($id_limpio);
		$this->load->view('detalle',$datos);

	}*/

/*	public function detalle_articulo($nombre_articulo)
	{
		//$this->output->enable_profiler(TRUE);
		$nombre_limpio  = str_replace('-',' ',$nombre_articulo);
		$datos['detalle'] = $this->Articulos_model->detalle_articulo($nombre_limpio);
		$this->load->view('detalle',$datos);
	}*/

	public function detalle_articulo($url_articulo)
	{
		//$this->output->enable_profiler(TRUE);
		$url_limpio = $this->security->xss_clean($url_articulo);
		$datos['detalle'] = $this->Articulos_model->detalle_articulo($url_limpio);
		$this->load->view('detalle',$datos);
	}
}
