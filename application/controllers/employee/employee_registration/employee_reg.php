<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_reg extends CI_Controller{

    public function employeeReg()
	{
		$this->load->view('employee/employee_registration/Employee_reg');
	}

	public function employeeRegProcess()
	{
		$this->load->model('employee_model/employee_model');
		$this->employee_model->employeeRegProcess();
	}
}