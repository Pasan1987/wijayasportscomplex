<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bodybuilding extends CI_Controller {
	
	public function sportBodybuilding()
	{
		$this->load->view('sport/bodybuilding');
    }
}