<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AgendarMedico extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
	}
	public function index(){
		$this->load->view('includes/headerR');
		$this->load->view('agendarmedico');
		$this->load->view('includes/footerR');
	}
}