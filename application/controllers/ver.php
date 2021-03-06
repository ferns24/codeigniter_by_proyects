<?php

class Ver extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('date');
		$this->load->model('modelo_db');
	}

	public function index()
	{
		$id=$this->uri->segment(2);
		$dato['articulo']=$this->modelo_db->buscar_articulo($id);

		$titulo['titulo']=ucfirst('ver articulo');

		$this->load->view('layout/head',$titulo);
		$this->load->view('ver',$dato);
		$this->load->view('layout/footer');
	}
}