<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

	public function allSetting()
	{
        
        		$this->load->view('setting/setting');
    }
}