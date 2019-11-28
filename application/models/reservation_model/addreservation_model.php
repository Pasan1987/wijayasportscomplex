<?php
class Addreservation_model extends CI_model{
    
    public function addreservationprocess()
    {
        //$variable => $_POST['field name']
          $name = $_POST['name'];
          $badmintonres_id='2';
          $sport = $_POST['sport'];
          $event = $_POST['event'];
          $date = $_POST['date'];
          $time = $_POST['time'];
          $contactno = $_POST['contactnumber']; 
      

        $reservation = array(
            // 'dadatatabase col name' => $variable
            'name' => $name,
            'badmintonres_id'=> $badmintonres_id,
            'sport'=> $sport,
            'event'=> $event,
            'date'=> $date,
            'time' => $time,
            'contactno' => $contactno,
            
        );

        $this->db->insert('reservation',$reservation);
    }
}