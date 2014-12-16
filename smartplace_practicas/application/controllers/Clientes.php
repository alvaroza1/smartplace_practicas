<?php
class Clientes extends CI_Controller {

	public function __construct(){
	parent::__construct();
	
	$this->load->model('cliente', '', TRUE);
	
	}

	public function index(){
		
		$data['clientes'] = $this->cliente->search();
		$this->load->view('partials/header', $data);
		$this->load->view('inicio/clientes', $data);
		$this->load->view('partials/footer', $data);
	}
}
