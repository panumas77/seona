<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged_in') !== TRUE){
		  redirect('login');
		}
	  }

	  function index(){
		//Allowing akses to admin only
		  if($this->session->userdata('level')==='1'){
				$data['main_content'] = 'pages/dashboard';
				$this->load->view("includes/template",$data);
		  }else{
			  echo "Access Denied";
		  }
	 
	  }
	 
	  function staff(){
		//Allowing akses to staff only
		if($this->session->userdata('level')==='2'){
			$data['main_content'] = 'pages/dashboard';
			$this->load->view("includes/template",$data);
		}else{
			echo "Access Denied";
		}
	  }
	 
	  function author(){
		//Allowing akses to author only
		if($this->session->userdata('level')==='3'){
			$data['main_content'] = 'pages/dashboard';
			$this->load->view("includes/template",$data);
		}else{
			echo "Access Denied";
		}
	  }  

	
}
