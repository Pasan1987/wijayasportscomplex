<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Viewemployee extends CI_Controller 
{

	public function view_empdetails()
	{
		$this->load->view('employee/employee_view');
	}
}


// defined('BASEPATH') OR exit('No direct script access allowed');

// class Viewemployee extends CI_Controller
//  {
	
// 	public function viewemp_details()
// 	{
// 		$this->load->view('employee/employee_view');
// 	}
// }