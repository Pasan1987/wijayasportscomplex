
<?php
class Member_model extends CI_model{public function loguser()
   {
       $username = $_POST['loginUsername'];
       $password = sha1($_POST['loginPassword']);
 
       $this->db->select('*');
       $this->db->where('username',$username);
       $this->db->where('password',$password);
       $this->db->from('login');
       $this->db->join('user', 'user.id = login.user_id');
       $query = $this->db->get();
        //print_r($query->result());
       if ($query->num_rows()==1)
       {
          
           return $query->row(0);
       }
       else
       {
           return false;
       }
   }
