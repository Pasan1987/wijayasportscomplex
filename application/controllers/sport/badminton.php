<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Badminton extends CI_Controller {
   	
	public function sportBadminton()
	{
        $this->load->view('sport/badminton');
        
    }
}