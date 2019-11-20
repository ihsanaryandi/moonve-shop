<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Moonve extends CI_Controller {

	public function index()
	{

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('moonve/index');
		$this->load->view('templates/footer');

	}

	public function cart()
	{

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('moonve/cart');

	}

}
