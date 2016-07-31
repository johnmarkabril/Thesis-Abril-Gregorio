<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends CI_Controller 
{

	public function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');    
    }

	public function index()
	{
    	

		if(!$this->session->userdata('log_sess')){
    		$this->load->view('template.php');
    	}else{
    		$log_sess =  $this->session->userdata('log_sess');
    		if ($log_sess->ACCOUNT_TYPE == "Administrator"){
    			redirect('admin/Dashboard');
    		}
    	}

    	
	}

}