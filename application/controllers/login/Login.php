<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('login/login_model');
        
    }
{

	public function loguser()
	{
		$response = $this->Login_Model->loguser();
		if($response)
	{
		   
		if($response->isDisabled != 0)
			{
				$this->session->set_flashdata("error","Your account has been Deleted or Disabled... 
				Please Contact your System  Administrator");
				redirect("Home/index");
			}
			else
			{
  
				$userdata = array(
  
					'id' =>$response->id,
					'firstname' => $response->firstname,
					'lastname' => $response->lastname,
					'usertype' => $response->userrole_id,
					'username' => $response->username,
					'userid' => $response->user_id,
					'loggedin' => 'logged'
  
				);
				$this->session->set_userdata($userdata);
			   
				redirect('dashboard/dashboard');
			}
		   
		}
		else
		{
		   $this->session->set_flashdata("error","Wrong Username or Password");
		   redirect("wijayasportscomplex/index.php");
		}
	}
 
}
