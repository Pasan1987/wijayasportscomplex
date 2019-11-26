<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function userProfile()
	{
		$this->load->view('profile/profile');
	}
}
