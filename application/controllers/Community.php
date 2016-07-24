<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Community extends CI_Controller 
{

	public function __construct()
    {
        parent::__construct();   
    }

	public function index()
	{
		$this->load->view('template.php');
		$this->load->view('common/navtop_guest.php');
		$this->load->view('guest/community.php');
	}

}