<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_memberdetails extends CI_Controller {

	public function viewMember()
	{
		$this->load->view('member/view_memdetails');
	}
}