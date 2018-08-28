<?php
class Afc_model extends CI_model{


  public function cum_revenue($id){
  $this->db->select_sum('amount');
  $this->db->where('vehicle', $id);
  $result = $this->db->get('afc_rides')->row();  

  if($result->amount)
    return $result->amount;
  else 
    return 0; 
}

} ?>