<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {
	
	public function registrationProcess()
	{
		$this->load->view('registration/Member_reg');
	}
	public function registrationDetails()
	{
		$this->load->view('registration/Member_details');
	}
	Public function registrationFee()
	{
		$this->load->view('registration/Member_regfee');
	}
	Public function employeereg()
	{
		$this->load->view('registration/Employee_reg');
	}
}

