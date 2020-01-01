<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registration extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('member_model/member_model');
        
    }

    public function registrationProcess()
    {
        $this->load->view('member/member_reg');
    }
    public function registrationDetails()
    {
        $this->load->view('member/member_details');
    }
    public function registrationFee()
    {
        $this->load->view('member/member_regfee');
    }
    public function memberRegProcess()
	{

		$this->member_model->memberRegprocess();
    }
    public function memberRegmesurement()
	{

        $this->member_model->memberMesurement();

        
        }
    //       {
    //  $responce = $this->member_model->memberMesurement();
    //   if ($responce)
    //    {
    //     $this->session->set_flashdata("success","Employee details Successfully Added");
    //     redirect("member/Registration/memberMesurement");
    //   }
    //   else
    //   {
    //     $this->session->set_flashdata("error","Error! Something Went Wrong!");

    //   }

    


}
