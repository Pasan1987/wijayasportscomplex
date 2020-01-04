<?php
class Member_model extends CI_model
{

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
        if (!empty($_POST['badminton'])) {
            $badminton = $_POST['badminton'];
        } else {
            $badminton = "";
        }

        if (!empty($_POST['swimming'])) {
            $swimming = $_POST['swimming'];
        } else {
            $swimming = "";
        }

        if (!empty($_POST['bodybuilding'])) {
            $bodybuilding = $_POST['bodybuilding'];
        } else {
            $bodybuilding = "";
        }
        $member = array(
            // 'dadatatabase col name' => $variable
            'firstname' => $firstname,
            'lastname' => $lastname,
            'dateofbirth' => $dateofbirth,
            'address' => $address,
            'nic' => $nic,
            'lastname' => $lastname,
            'telephone' => $telephone,
            'gender_id' => $gender,
            'employee_id' => '1',
        );

        $this->db->insert('member', $member);

        $insert_id = $this->db->insert_id();

        $membersport = array(
            "$badminton",
            "$swimming",
            "$bodybuilding"
        );

        $i = 0;
        foreach ($membersport as $row) {
            if ($membersport[$i] != "") {
                $memsport =  array(
                    'member_id' => $insert_id,
                    'sport_id' => $membersport[$i]
                );

                $this->db->insert('member_has_sport', $memsport);
            }

            $i++;
        }
        $this->load->view('member/member_details');
    }
    public function memberMesurement()
    {

        $this->db->select('id');
        $this->db->from('member');
        $this->db->order_by("id", "DESC");
        $this->db->limit(1);
        $memid = $this->db->get();

        foreach ($memid->result() as $row) {
            $memberid = $row->id;
        }

        $height = $_POST['height'];
        $weight = $_POST['weight'];
        $neck = $_POST['neck'];
        $shoulder = $_POST['shoulder'];
        $chest = $_POST['chest'];
        $forearm = $_POST['forearm'];
        $arm = $_POST['arm'];
        $wrist = $_POST['wrist'];
        $calf = $_POST['calf'];
        $ancle = $_POST['ancle'];

        $mesurement = array(
            'height' => $height,
            'weight' => $weight,
            'neck' => $neck,
            'shoulder' => $shoulder,
            'chest' =>  $chest,
            'forearm' => $forearm,
            'arm' => $arm,
            'whrist' => $wrist,
            'calf' => $calf,
            'ancle' => $ancle,
            'member_id' => $memberid,

        );

        $this->db->insert('bodymesurement', $mesurement);
        $this->load->view('member/member_regfee');
    }

    public function loadview()
    {
        $this->db->where('isdeleted', 0);
        $result = $this->db->get('member');
        return $result->result();
    }
}
