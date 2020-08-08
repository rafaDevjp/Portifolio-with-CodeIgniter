<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Geral extends CI_Controller {


	public function index(){
		$feed = [] ;
		$this->load->view('layout/header');
		$this->load->view('sessoes/navbar');
		$this->load->view('sessoes/apresentacao');
		$this->load->view('sessoes/serviços');
		$this->load->view('sessoes/quem_sou');
		$this->load->view('sessoes/contato', $feed);
		$this->load->view('sessoes/rodape');
		$this->load->view('layout/footer');
	}

	

	
}
