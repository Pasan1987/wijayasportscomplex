<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {
	
	public function addreservation()
	{
		$this->load->view('add/add');
	}
}