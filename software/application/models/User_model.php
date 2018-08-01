<?php
class User_model extends CI_model{

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

public function email_check($email){

  $this->db->select('*');
  $this->db->from('users');
  $this->db->where('email',$email);
  $query=$this->db->get();

  if($query->num_rows()>0){
    return false;
  }else{
    return true;
  }

}

public function register_user($user){
  $this->db->insert('users', $user);
}

public function biller_add($data){
  $this->db->insert('customers', $data);
}

public function customer_add($data){
  $this->db->insert('customers', $data);
}

public function sp_add($data){
  $this->db->insert('products', $data);
}

public function supplier_add($data){
  $this->db->insert('customers', $data);
}

public function get_invoice_number(){
  $userid=$this->session->userdata('id');
  $q = $this->db
                ->where('user',$userid)
                ->where('type','1')
                ->order_by('id', 'DESC')
                ->limit(1)
                ->get('invoices')
                ->result();
  foreach($q as $row){
    return $row->id;   
  }
}

public function get_customer_name($customer_id){
  $q = $this->db
                ->where('id',$customer_id)
                // ->where('','1')
                // ->order_by('id', 'DESC')
                // ->limit(1)
                ->get('customers')
                ->result();
  foreach($q as $row){
    return $row->company;   
  }
}

public function get_product_name($product_id){
  $q = $this->db
                ->where('id',$product_id)
                // ->where('','1')
                // ->order_by('id', 'DESC')
                // ->limit(1)
                ->get('products')
                ->result();
  foreach($q as $row){
    return $row->descr;   
  }
}

public function get_quotation_number(){
  $userid=$this->session->userdata('id');
  $q = $this->db
                ->where('user',$userid)
                ->where('type','0')
                ->order_by('id', 'DESC')
                ->limit(1)
                ->get('invoices')
                ->result();
  foreach($q as $row){
    return $row->id;   
  }
}

public function invoice_add($data2){
  $this->db->insert('invoices', $data2);
}

public function receipt_add($data2){
  $this->db->insert('receipts', $data2);
}

public function payment_add($data2){
  $this->db->insert('payments', $data2);
}

public function invoice_item_add($sales1){
  //insert invoice and its details
  $this->db->insert('sales', $sales1);
}

public function mybillers(){
  $userid=$this->session->userdata('id');

    $this->db->select('*');
    $this->db->from('customers');
    $this->db->where('type', '0');
    $this->db->where('user', $userid);
    $this->db->order_by('company', 'ASC');
    $q=$this->db->get();

    if($q->num_rows() >0){
      foreach($q->result() as $row){
        $data[]=$row;
      }
      return $data; 
    }
  }

  public function mysuppliers(){
  $userid=$this->session->userdata('id');

    $this->db->select('*');
    $this->db->from('customers');
    $this->db->where('type', '2');
    $this->db->where('user', $userid);
    $this->db->order_by('company', 'ASC');
    $q=$this->db->get();

    if($q->num_rows() >0){
      foreach($q->result() as $row){
        $data[]=$row;
      }
      return $data; 
    }
  }

  public function mypayments(){
  $userid=$this->session->userdata('id');

    $this->db->select('*');
    $this->db->from('payments');
    $this->db->where('user', $userid);
    $this->db->order_by('date_time', 'DESC');
    $q=$this->db->get();

    if($q->num_rows() >0){
      foreach($q->result() as $row){
        $data[]=$row;
      }
      return $data; 
    }
  }

  public function myreceipts(){
  $userid=$this->session->userdata('id');

    $this->db->select('*');
    $this->db->from('receipts');
    $this->db->where('user', $userid);
    $this->db->order_by('date_time', 'DESC');
    $q=$this->db->get();

    if($q->num_rows() >0){
      foreach($q->result() as $row){
        $data[]=$row;
      }
      return $data; 
    }
  }

  public function mycustomers(){
  $userid=$this->session->userdata('id');

    $this->db->select('*');
    $this->db->from('customers');
    $this->db->where('type', '1');
    $this->db->where('user', $userid);
    $this->db->order_by('company', 'ASC');
    $q=$this->db->get();

    if($q->num_rows() >0){
      foreach($q->result() as $row){
        $data[]=$row;
      }
      return $data; 
    }
  }

  public function myproducts(){
  $userid=$this->session->userdata('id');

    $this->db->select('*');
    $this->db->from('products');
    $this->db->where('user', $userid);
    $this->db->order_by('descr', 'ASC');
    $q=$this->db->get();

    if($q->num_rows() >0){
      foreach($q->result() as $row){
        $data[]=$row;
      }
      return $data; 
    }
  }

  public function myquotations(){
  $userid=$this->session->userdata('id');

    $this->db->select('*');
    $this->db->from('invoices');
    $this->db->where('user', $userid);
    $this->db->where('type', '0');
    $this->db->order_by('id', 'DESC');
    $q=$this->db->get();

    if($q->num_rows() >0){
      foreach($q->result() as $row){
        $data[]=$row;
      }
      return $data; 
    }
  }

  public function myinvoices(){
  $userid=$this->session->userdata('id');

    $this->db->select('*');
    $this->db->from('invoices');
    $this->db->where('user', $userid);
    $this->db->where('type', '1');
    $this->db->order_by('id', 'DESC');
    $q=$this->db->get();

    if($q->num_rows() >0){
      foreach($q->result() as $row){
        $data[]=$row;
      }
      return $data; 
    }
  }

  public function invoices_to_receipt(){
  $userid=$this->session->userdata('id');

    $this->db->select('*');
    $this->db->from('invoices');
    $this->db->where('user', $userid);
    $this->db->where('type', '1');
    $this->db->order_by('id', 'DESC');
    $q=$this->db->get();

    if($q->num_rows() >0){
      foreach($q->result() as $row){
        $data[]=$row;
      }
      return $data; 
    }
  }

  public function oneinvoice($invoice, $userid){

    $this->db->select('*');
    $this->db->from('invoices');
    $this->db->where('user', $userid);
    $this->db->where('id', $invoice);
    $q=$this->db->get();

    if($q->num_rows() >0){
      foreach($q->result() as $row){
        $data[]=$row;
      }
      return $data; 
    }
  }


  public function onereceipt($receipt, $userid){

    $this->db->select('*');
    $this->db->from('receipts');
    $this->db->where('user', $userid);
    $this->db->where('id', $receipt);
    $q=$this->db->get();

    if($q->num_rows() >0){
      foreach($q->result() as $row){
        $data[]=$row;
      }
      return $data; 
    }
  }

public function delete_customer($customer){
  // $this->db->dele('receipts', $data2);
}


public function get_biller_image($id){
  $q = $this->db
                ->where('id',$id)
                ->get('customers')
                ->result();
  foreach($q as $row){
    return $row->logo;   
  }
}

public function get_biller_name($id){
  $q = $this->db
                ->where('id',$id)
                ->get('customers')
                ->result();
  foreach($q as $row){
    return $row->company;   
  }
}

public function get_biller_address($id){
  $q = $this->db
                ->where('id',$id)
                ->get('customers')
                ->result();
  foreach($q as $row){
    return $row->address;   
  }
}

public function get_biller_city($id){
  $q = $this->db
                ->where('id',$id)
                ->get('customers')
                ->result();
  foreach($q as $row){
    return $row->city;   
  }
}

public function get_biller_country($id){
  $q = $this->db
                ->where('id',$id)
                ->get('customers')
                ->result();
  foreach($q as $row){
    return $row->country;   
  }
}

public function get_biller_phone($id){
  $q = $this->db
                ->where('id',$id)
                ->get('customers')
                ->result();
  foreach($q as $row){
    return $row->phone;   
  }
}

public function get_biller_email($id){
  $q = $this->db
                ->where('id',$id)
                ->get('customers')
                ->result();
  foreach($q as $row){
    return $row->email;   
  }
}

public function get_biller_invoice($id){
  $q = $this->db
                ->where('id',$id)
                ->get('customers')
                ->result();
  foreach($q as $row){
    return $row->invoice;   
  }
}

public function get_biller_receipt($id){
  $q = $this->db
                ->where('id',$id)
                ->get('customers')
                ->result();
  foreach($q as $row){
    return $row->receipt;   
  }
}

public function get_biller_website($id){
  $q = $this->db
                ->where('id',$id)
                ->get('customers')
                ->result();
  foreach($q as $row){
    return $row->website;   
  }
}

public function get_paid_amount($id){
  $this->db->select_sum('amount');
  $this->db->where('invoice', $id);
  $result = $this->db->get('receipts')->row();  
  return $result->amount; 
}

public function invoice_sales($id){
  // $userid=$this->session->userdata('id');

    $this->db->select('*');
    $this->db->from('sales');
    $this->db->where('invoice', $id);
    // $this->db->where('type', '1');
    // $this->db->order_by('id', 'DESC');
    $q=$this->db->get();

    if($q->num_rows() >0){
      foreach($q->result() as $row){
        $data[]=$row;
      }
      return $data; 
    }
  }

}


?>
