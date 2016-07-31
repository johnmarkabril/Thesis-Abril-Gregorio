<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller 
{

	public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        if(!$this->session->userdata('log_sess')){
        	redirect('/');
        }
    }

	public function index()
	{
			$this->load->view('Template');
			$this->load->view('admin/Dashboard');
	}

}