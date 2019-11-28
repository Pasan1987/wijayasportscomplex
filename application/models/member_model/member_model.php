<?php
class Member_model extends CI_model{
    
    public function memberRegprocess()
    {
        //$variable => $_POST['field name']
         $firstname = $_POST['firstname'];
         $dateofbirth = $_POST['dob'];
         $address = $_POST['address'];
         $nic = $_POST['nic'];
         $lastname = $_POST['lastname'];
         $telephone = $_POST['txtEmpPhone']; 
         $gender = $_POST['gender'];

        $member = array(
            // 'dadatatabase col name' => $variable
            'firstname' => $firstname,
            'dateofbirth'=> $dateofbirth,
            'address'=> $address,
            'nic'=> $nic,
            'lastname' => $lastname,
            'telephone' => $telephone,
            'gender_id'=> $gender,
        );

        $this->db->insert('member',$member);
    }
}
