<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Alta extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
	}
	public function index(){
		$this->load->view('includes/header');
		$this->load->view('alta');
		$this->load->view('includes/footer');
	}
}