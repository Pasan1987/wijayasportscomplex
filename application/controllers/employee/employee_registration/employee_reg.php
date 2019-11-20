<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_reg extends CI_Controller{

    Public function employeeReg()
	{
		$this->load->view('employee/employee_registration/Employee_reg');
	}
}