<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Swimming extends CI_Controller {
	
	public function sportSwimming()
	{
		$this->load->view('sport/swimming');
    }
}