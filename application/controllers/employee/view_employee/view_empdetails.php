<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_empdetails extends CI_Controller {

	public function viewEmployee()
	{
		$this->load->view('employee/view_employee/view_empdetails');
	}
}