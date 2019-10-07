<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
	}
	public function index(){		
		if(@$this->session->userdata('my_session')){
			redirect('home');
		}
		$this->load->view('login_page');
	}
		 
	public function autenticar(){
	   if($this->input->post('email')&&$this->input->post('password')){
		$curl_request = curl_init('http://localhost/tickets2_services/index.php/loginuser/api/login');
		$data = array(
			"email"=>$this->input->post('email'),
			"password"=>$this->input->post('password')
		);
		$data_to_string = json_encode($data);
		curl_setopt($curl_request,CURLOPT_CUSTOMREQUEST,'post');
		curl_setopt($curl_request,CURLOPT_HTTPHEADER,array(
			'Content-Type: application/json'
			//'API-KEY: QWERTY' proteccion de peticion
		));

		curl_setopt($curl_request,CURLOPT_RETURNTRANSFER,true);
		curl_setopt($curl_request,CURLOPT_POSTFIELDS,$data_to_string);
		$response = curl_exec($curl_request);
		if(!$response){
			$response = array(
				"status"=>curl_errno($curl_request),
				"message"=>curl_error($curl_request)
			);
		}
		curl_close($curl_request);
		$response = json_decode($response);
		if($response->status=="success"){
			echo var_dump($response);
						
			switch($response->data->tipo){
				
				case 'Admin':
				$this->session->set_userdata('my_session',$response->data);										
				redirect('home');						
				break;

				case 'Cliente': 
				$this->session->set_userdata('my_session',$response->data);						
				redirect('home');						
				break;

				case 'Tecnico': 
				$this->session->set_userdata('my_session',$response->data);						
				redirect('home');						
				break;								
			}
						
		}else{
			//error, redirigir al login con los errores
			echo var_dump($response);
		}

	   }else{
		   //mandar mensajes de error a la vista login
		   echo "no se enviaron datos";
	   }
	
   }		

   function logout(){
	   $this->session->sess_destroy();
	   redirect('login');
   }
}