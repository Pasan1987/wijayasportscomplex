<?php
class Employee_model extends CI_Model
{
    public function employeeRegProcess()
    {
       $firstname = $_POST['firstname'];

    $employee = array(
        'name' => $firstname ,
        'designation_id' => "1",
        'usertype_id' => "1",
        'login_id' => "1"
       );

       $this->db->insert('employee',$employee);
       
    }
}