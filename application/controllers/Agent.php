<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agent extends CI_Controller 
{

	public function __construct()
    {
        parent::__construct();
		if($log_sess->ACCOUNT_TYPE != 'Agent'){
    		redirect('/');
    	}
        $this->load->model('Users_model');
    }

	public function index()
	{
		$this->load->view('template3');
		// $this->load->view('admin/dashboard.php');
	}
}