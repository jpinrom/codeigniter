<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
			parent::__construct();

	}
	public function index()
	{
		$this->load->model('Articulos_model');
		$datos['articulos'] = $this->Articulos_model->lista_articulos();
    $this->load->view('index',$datos);
	}
}
