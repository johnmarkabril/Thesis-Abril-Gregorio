<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users_model extends CI_Model
{

	public $table			= 'users';
	public $user_id			= 'USER_ID';
	public $user_password	= 'USER_PASSWORD';
	public $user_active		= 'USER_ACTIVE';
	public $user_email		= 'USER_EMAIL';

	function __construct()
	{
		parent::__construct();
	}

	function getuserbyemailpass($user_email,$user_password)
	{
		$this->db->where($this->user_email, $user_email);
		$this->db->where($this->user_password, $user_password);
		return $this->db->get($this->table)->row();
	}
}