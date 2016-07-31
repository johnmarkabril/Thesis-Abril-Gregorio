<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller 
{

	public function __construct()
    {
        parent::__construct();
        $log_sess = $this->session->userdata('log_sess');
		if($log_sess->ACCOUNT_TYPE != 'Client'){
    		redirect('/');
    	}
        $this->load->model('Users_model');
    }

	public function index()
	{
		$this->load->view('template1');
	}
}