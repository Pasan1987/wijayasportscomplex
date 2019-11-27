<?php
class Member_model extends CI_model{
    public function registrationProcess(){
    $firstname = $_POST['firstname'];

    $member = array(
        'name'=>$firstname,
        'name'=>$lastname,

    );
    $this->db->insert('member',$member);
    }
}
