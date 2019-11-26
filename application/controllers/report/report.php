<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {
	
	public function reportGenerate()
	{
		$this->load->view('report/report');
    }
}