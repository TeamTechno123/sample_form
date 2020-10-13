<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

	
	public function index()
	{
		$this->load->view('Master/index');
	}

	public function create_profile()
	{
		$this->load->view('Master/create_profile');
	}
}
