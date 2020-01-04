<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
		$responce = $this->employee_model->employeeRegProcess();
		if ($responce) {
			$this->session->set_flashdata("success", "Successfull Added");
			redirect("employee/employee_reg/employeeReg");
		}

		// $this->employee_model->employeeRegProcess();
	}

	public function view_empdetails()
	{
		$this->data['employees'] = $this->employee_model->empview();
		$this->load->view('employee/employee_view', $this->data);
	}
}
