<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservation extends CI_Controller 
{
	function __construct()
    {
        parent::__construct();
        $this->load->model('reservation_model/addreservation_model');
        
    }

	public function reservationProcess()
	{
        
		$this->load->view('reservation/reservation');
		
	}
	public function addreservation()
	{

		$this->load->view('reservation/addres');
	}


	public function addreservationprocess()
	{
		$this->addreservation_model->addreservationprocess();	
	}

}
