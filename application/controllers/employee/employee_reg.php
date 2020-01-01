<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_reg extends CI_Controller
{
	function __construct()
    {
        parent::__construct();
		$this->load->model('employee_model/employee_model');
	
        
    }

    public function employeeReg()
	{
		$this->load->view('employee/employee_reg');
	}

	public function employeeRegProcess()
	{
		
		$this->employee_model->employeeRegProcess();
	}
}