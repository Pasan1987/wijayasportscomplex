<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function loginprocess()
	{
		$this->load->view('dashboard/dashboard');
	}
}
