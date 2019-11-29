<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Preregistro extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
	}
	public function index(){
		$this->load->view('includes/headerR');
		$this->load->view('preregistro');
		$this->load->view('includes/footerR');
	}
}