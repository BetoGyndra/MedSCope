<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Noatencion extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
	}
	public function index(){
		$this->load->view('includes/header');
		$this->load->view('noatencion');
		$this->load->view('includes/footer');
	}
}