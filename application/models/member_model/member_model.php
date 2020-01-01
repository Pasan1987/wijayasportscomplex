<?php
class Member_model extends CI_model{
    
    public function memberRegprocess()
    {
        //$variable => $_POST['field name']
         $firstname = $_POST['firstname'];
         $lastname = $_POST['lastname'];
         $dateofbirth = $_POST['dob'];
         $address = $_POST['address'];
         $nic = $_POST['nic'];
         $lastname = $_POST['lastname'];
         $telephone = $_POST['txtEmpPhone']; 
         $gender = $_POST['gender'];
        

        $member = array(
            // 'dadatatabase col name' => $variable
            'firstname' => $firstname,
            'lastname'=>$lastname,
            'dateofbirth'=> $dateofbirth,
            'address'=> $address,
            'nic'=> $nic,
            'lastname' => $lastname,
            'telephone' => $telephone,
            'gender_id'=> $gender,
            'employee_id'=>'1',
        );

        $this->db->insert('member',$member);
        $this->load->view('member/member_details');
    }
    public function memberMesurement()
    {
       echo $height = $_POST['height'];
       echo $weight = $_POST['weight'];
       echo $neck = $_POST['neck'];
        // $shoulder = $_POST['shoulder'];
        // $chest = $_POST['chest']; 
        // $foearm = $_POST['foearm'];
        // $arm = $_POST['arm'];
        // $wrist = $_POST['wrist'];
        // $calf = $_POST['calf'];
        // $ancle = $_POST['ancle'];

    $mesurement = array(
        'height' => $height,
        'weight' => $weight, 
        'neck' => $neck,
        // 'shoulder'=> $shoulder,
        // 'chest'=>  $chest,
        // 'foearm'=> $arm,
        // 'arm' => $wrist,
        // 'wrist' => $arm,
        // 'calf' => $calf,
        // 'ancle' => $ancle,

       );

       $this->db->insert('bodymesurement',$mesurement);
       
    }
}
