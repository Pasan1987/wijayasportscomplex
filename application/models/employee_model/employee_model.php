<?php
class Employee_model extends CI_Model
{
    public function employeeRegProcess()
    {
        $firstname = $_POST['namewithiniial'];
        $dateofbirth = $_POST['dateofbirth'];
        $address = $_POST['address'];
        $nic = $_POST['nic'];
        $telephone = $_POST['txtEmpPhone']; 
        // $gender = $_POST['gender'];
        $designation = $_POST['designation'];

    $employee = array(
        'namewithinitial' => $firstname,
        'dateofbirth' => $dateofbirth, 
        'address' => $address,
        'nic'=> $nic,
        'telephone'=> $telephone,
        // 'gender'=> $gender,
        'designation'=> $designation,
        'designation_id' => "1",
        'usertype_id' => "1",
        'login_id' => "1",

       );

       $this->db->insert('employee',$employee);
       
    }
    // function employeeRegProcess($employee)
    // {
    //     return $this->db->insert('employee', $employee);
    // }
    
}
