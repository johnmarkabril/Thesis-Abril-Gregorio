<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller 
{

	public function __construct()
    {
        parent::__construct();
        $log_sess = $this->session->userdata('log_sess');
        if($log_sess->ACCOUNT_TYPE != 'Administrator'){
            redirect('/');
        }
    }

	public function index()
	{
		$this->load->view('template2');
		$this->load->view('admin/dashboard.php');
	}

}