<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class payment extends CI_Controller {
	
	public function dashboardcontrol()
	{
		$this->load->view('dashboard/dashboard');
	}
}