<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class DAO extends CI_Model{
	function __construct(){
        parent::__construct();
    }

    
    function selectEntity($entityName, $whereClause=NULL, $isUnique=FALSE){
    	if ($whereClause) {
    		$this->db->where($whereClause);
    	}
    	$query=$this->db->get($entityName);

    		$responseDB = array(
                "status"=>"success", 
                "status_code"=>200, 
                "message"=>"DATA FOUND",
                "validations"=>NULL, 
                "data"=>$isUnique ? $query->row() : $query->result()
            );
    	return $responseDB;
    }


    
    function insertData($entityName, $data){
    	$this->db->insert($entityName,$data);
    	if ($this->db->error()['message']!='') {
    		$responseDB = array(
	    		"status"=>"error", 
	            "status_code"=>409, 
	            "message"=>"Error Saving Data",
	            "validations"=>$this->db->error(),
	            "data"=>NULL
    		);
    	}else{
    		$responseDB = array(
                "status"=>"success", 
                "status_code"=>201, 
                "message"=>"OK Data Saved",
                "validations"=>NULL,  
                "data"=>NULL
            );
    	}
    	return $responseDB;
    }

    
    function updateData($entityName, $data, $whereClause){
   	$this->db->where($whereClause);
   	$this->db->update($entityName,$data);
    	if ($this->db->error()['message']!='') {
    		$responseDB = array(
	    		"status"=>"error", 
	            "status_code"=>409, 
	            "message"=>"Error Updating Data",
	            "validations"=>$this->db->error(),
	            "data"=>NULL
    		);
    	}else{
    		$responseDB = array(
                "status"=>"success", 
                "status_code"=>201, 
                "message"=>"OK Data Updated",
                "validations"=>NULL,  
                "data"=>NULL
            );
    	}
    	return $responseDB;
    }

    
    function deleteData($entityName, $whereClause){
   	$this->db->where($whereClause);
   	$this->db->delete($entityName);
    	if ($this->db->error()['message']!='') {
    		$responseDB = array(
	    		"status"=>"error", 
	            "status_code"=>409, 
	            "message"=>"Error Deleting Data",
	            "validations"=>$this->db->error(),
	            "data"=>NULL
    		);
    	}else{
    		$responseDB = array(
                "status"=>"success", 
                "status_code"=>201, 
                "message"=>"OK Data Deleted",
                "validations"=>NULL,  
                "data"=>NULL
            );
    	}
    	return $responseDB;
    }

	/*
	function queryData1($entityName, $whereClause){
	   $this->db->where($whereClause);
	    //$this->db->get($entityName);
	   $query = (SELECT * FROM usuarios WHERE emailUsuario==emailUsuario && passwordUsuario==passwordUsuario);
	   return $query
    	if ($this->db->error()['message']!='') {
    		$responseDB = array(
	    		"status"=>"error", 
	            "status_code"=>409, 
	            "message"=>"Error user not found",
	            "validations"=>$this->db->error(),
	            "data"=>NULL
    		);
    	}else{
			if($query== true){
				console.log($query)
			}
    		$responseDB = array(
                "status"=>"success", 
                "status_code"=>201, 
                "message"=>"OK user Found",
                "validations"=>NULL,  
                "data"=>NULL
            );
    	}
    	return $responseDB;
	}
	*/
	function queryData($entityName, $whereClause=NULL, $isUnique=FALSE){
    	if ($whereClause) {
    		$this->db->where($whereClause);
    	}
    	$query=$this->db->get($entityName);
    		$responseDB = array(
                "status"=>"success", 
                "status_code"=>200, 
                "message"=>"DATA FOUND",
                "validations"=>NULL, 
                "data"=>$isUnique ? $query->row() : $query->result()
            );
    	return $responseDB;
	}		
	
}