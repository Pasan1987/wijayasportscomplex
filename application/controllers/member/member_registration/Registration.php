<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {
	
	public function registrationProcess()
	{
		$this->load->view('member/member_registration/member_reg');
	}
	public function registrationDetails()
	{
		$this->load->view('member/member_registration/member_details');
	}
	public function registrationFee()
	{
		$this->load->view('member/member_registration/member_regfee');
	}
	
}

