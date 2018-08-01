<?php class Tracker_model extends CI_model{
  public function login_user($email,$password){
    $this->db->select('*');
    $this->db->from('users');
    $this->db->where('email',$email);
    $this->db->where('password',$password);

    if($query=$this->db->get())
    {
        return $query->row_array();
    }
    else{
      return false;
    }
  }
  
}