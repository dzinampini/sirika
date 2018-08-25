<?php class Tracker_model extends CI_model{


   public function mynotifications(){
    $company=$this->session->userdata('company');

    $this->db->select('*');
    $this->db->from('tr_notifications');    
    $this->db->where('company', $company);
    $q=$this->db->get();

    if($q->num_rows() >0){
      foreach($q->result() as $row){
        $data[]=$row;
      }
      return $data; 
    }
  }

  public function get_event($id){
  $q = $this->db
                ->where('id',$id)
                ->get('tr_notifications_events')
                ->result();
  foreach($q as $row){
    return $row->event;   
  }
}
  
  
}