<?php
class Inicio extends CI_Controller {

	public function index(){
		$this->load->view('partials/header');
		$this->load->view('inicio/index');
		$this->load->view('partials/footer');
	}

}
