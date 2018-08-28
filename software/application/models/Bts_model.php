<?php
class Bts_model extends CI_model{

  public function current_lat($id){
  $q = $this->db
                ->where('vehicle',$id)
                ->order_by('id', 'DESC')
                ->limit(1)
                ->get('tr_tracking_data')
                ->result();
  foreach($q as $row){
    return $row->latitude;   
  }
}

public function current_lon($id){
  $q = $this->db
                ->where('vehicle',$id)
                ->order_by('id', 'DESC')
                ->limit(1)
                ->get('tr_tracking_data')
                ->result();
  foreach($q as $row){
    return $row->longitude;  
  }
}

public function cum_revenue($id){
  $this->db->select_sum('amount');
  $this->db->where('vehicle', $id);
  $result = $this->db->get('bt_traditional')->row();  
  return $result->amount; 
}

public function passenger_count($id){

  $this->db->select('*');
  $this->db->from('afc_rides');
  $this->db->where('vehicle',$id);
  $this->db->where('out_lat','');
  $this->db->where('out_lon','');
  $query=$this->db->get();

  if($query->num_rows()>0){
    return $query->num_rows();
  }else{
    return 0;
  }

}

} ?>