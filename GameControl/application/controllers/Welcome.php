<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/dashboard');
	}
		public function users()
	{
		$this->load->view('admin/users');
	}
}