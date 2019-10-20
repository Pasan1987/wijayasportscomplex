<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	public function registrationProcess()
	{
		$this->load->view('registration/Registration');
	}
}
