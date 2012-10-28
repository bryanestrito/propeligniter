<?php

/**
* Propel Test
*/
class Test extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function add()
	{
		$this->load->model('users');
		$this->users->setuser('user');
		$this->users->setpass('pass');
		$this->users->save();
	}

	public function get()
	{
		$this->load->model('usersquery');
		$user = $this->usersquery->findPK(1);

		print_r($user);
	}
}