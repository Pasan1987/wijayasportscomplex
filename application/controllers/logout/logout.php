<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function logoutprocess()
	{
		$this->load->view('login/login');
	}
}
