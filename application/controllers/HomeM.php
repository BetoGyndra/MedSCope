<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class HomeM extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
	}
	public function index(){
		$this->load->view('includes/headerM');
		$this->load->view('homeM');
		$this->load->view('includes/footerM');
	}
}