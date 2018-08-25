<?php class Welcome_model extends CI_model{

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


  public function mycompany(){
    $company=$this->session->userdata('company');

    $this->db->select('*');
    $this->db->from('companies');    
    $this->db->where('id', $company);
    $q=$this->db->get();

    if($q->num_rows() >0){
      foreach($q->result() as $row){
        $data[]=$row;
      }
      return $data; 
    }
  }

  public function mystaff(){
    $company=$this->session->userdata('company');

    $this->db->select('*');
    $this->db->from('users');    
    $this->db->where('company', $company);
    $q=$this->db->get();

    if($q->num_rows() >0){
      foreach($q->result() as $row){
        $data[]=$row;
      }
      return $data; 
    }
  }

  public function myvehicles(){
    $company=$this->session->userdata('company');

    $this->db->select('*');
    $this->db->from('vehicles');    
    $this->db->where('company', $company);
    $q=$this->db->get();

    if($q->num_rows() >0){
      foreach($q->result() as $row){
        $data[]=$row;
      }
      return $data; 
    }
  }
  
}