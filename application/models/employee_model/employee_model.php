<?php
class Employee_model extends CI_Model
{
    public function employeeRegProcess()
    {
        $firstname = $_POST['namewithinitial'];
        $dateofbirth = $_POST['dateofbirth'];
        $address = $_POST['address'];
        $nic = $_POST['nic'];
        $telephone = $_POST['txtEmpPhone'];
        $gender = $_POST['gender'];
        $role = $_POST['role_id'];
        $designation = $_POST['designation'];
        $username = $_POST['username'];
        $password = $_POST['password'];


        if ($firstname == '' || $dateofbirth == '' || $address == '' || $nic == '') {
            echo 'employee registered';
            redirect('employee/employee_reg/employeeReg');
        } else {
            $employee = array(
                'namewithinitial' => $firstname,
                'dateofbirth' => $dateofbirth,
                'address' => $address,
                'nic' => $nic,
                'telephone' => $telephone,
                'gender' => $gender,
                'role_id' => $role,
                'designation' => $designation,
                'username' => $username,
                'password' => $password,
                // 'designation' => "1",
                // 'usertype_id' => "1",
                // 'login_id' => "1",

            );
            return $this->db->insert('employee', $employee);
        }
    }

    public function empview()
    {
        $this->db->where('isdeleted', 0);
        $result = $this->db->get('employee');
        return $result->result();
    }
}
    // function employeeRegProcess($employee)
    // {
    //     return $this->db->insert('employee', $employee);
    // }
