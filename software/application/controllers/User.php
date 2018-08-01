<?php

class User extends CI_Controller {

public function __construct(){

        parent::__construct();
  			$this->load->helper('url');
        $this->load->database();
  	 		$this->load->model('user_model');
        $this->load->library('session');


}

public function index()
{
    $this->load->view('login');
}

public function login()
{
    $this->index(); 
}


public function register()
{
    $this->load->view('register'); 
}

public function dashboard()
{
    $this->load->view('dashboard'); 
}

public function preferences()
{
    $this->load->view('preferences'); 
}

public function logout()
{
  $this->session->sess_destroy();
    $this->index(); 
}

public function add_biller()
{
    $this->load->view('add_biller'); 
}


public function add_customer()
{
    $this->load->view('add_customer'); 
}

public function add_invoice()
{
  $data['billers']=$this->user_model->mybillers();
  $data['customers']=$this->user_model->mycustomers();
  $data['products']=$this->user_model->myproducts();
  $this->load->view('add_invoice', $data); 
}

public function add_payment()
{
  $data['billers']=$this->user_model->mybillers();
  $data['suppliers']=$this->user_model->mysuppliers();
  $this->load->view('add_payment', $data); 
}

public function add_project()
{
    $this->load->view('add_project'); 
}

public function add_receipt()
{
  $data['invoices']=$this->user_model->invoices_to_receipt();
  $this->load->view('add_receipt', $data); 
}

public function add_sp()
{
    $this->load->view('add_sp'); 
}

public function add_supplier()
{
    $this->load->view('add_supplier'); 
}

public function add_ticket()
{
    $this->load->view('add_ticket'); 
}

public function add_quotation()
{
  $data['billers']=$this->user_model->mybillers();
  $data['customers']=$this->user_model->mycustomers();
  $data['products']=$this->user_model->myproducts();
  $this->load->view('add_quotation', $data); 
}

public function billers()
{
  $data['billers']=$this->user_model->mybillers();
  $this->load->view('billers', $data); 
}

public function customers()
{
  $data['customers']=$this->user_model->mycustomers();
  $this->load->view('customers', $data); 
}

public function payments()
{
  $data['payments']=$this->user_model->mypayments();
  $this->load->view('payments', $data); 
}

public function products()
{
  $data['products']=$this->user_model->myproducts();
  $this->load->view('products', $data); 
}

public function suppliers()
{
  $data['suppliers']=$this->user_model->mysuppliers();
  $this->load->view('suppliers', $data); 
}

public function receipts()
{
  $data['receipts']=$this->user_model->myreceipts();
  $this->load->view('receipts', $data); 
}

public function quotations()
{
  $data['quotations']=$this->user_model->myquotations();
  $this->load->view('quotations', $data); 
}

public function invoices()
{
  $data['invoices']=$this->user_model->myinvoices();
  $this->load->view('invoices', $data); 
}

public function oneinvoice()
{
  $userid=$this->session->userdata('id');
  $invoice = $this->uri->segment(4);
  $data['sales']=$this->user_model->invoice_sales($invoice);
  $data['invoices']=$this->user_model->oneinvoice($invoice, $userid);
  // $this->user_model->oneinvoice(); 
  $this->load->view('oneinvoice', $data); 
}

public function onereceipt()
{
  $userid=$this->session->userdata('id');
  $receipt = $this->uri->segment(3);
  $invoice = $this->uri->segment(4);
  $data['sales']=$this->user_model->invoice_sales($invoice);
  $data['invoices']=$this->user_model->oneinvoice($invoice, $userid);
  $data['receipts']=$this->user_model->onereceipt($receipt, $userid);
  // $this->user_model->oneinvoice(); 
  $this->load->view('onereceipt', $data); 
}

public function pdfreceipt()
{
  $userid=$this->session->userdata('id');
  $receipt = $this->uri->segment(3);
  $invoice = $this->uri->segment(4);
  $data['sales']=$this->user_model->invoice_sales($invoice);
  $data['invoices']=$this->user_model->oneinvoice($invoice, $userid);
  $data['receipts']=$this->user_model->onereceipt($receipt, $userid);
  // $this->user_model->oneinvoice(); 
  $this->load->view('pdfreceipt', $data); 
}

public function pdfinvoice()
{
  $userid=$this->session->userdata('id');
  $invoice = $this->uri->segment(4);
  $data['sales']=$this->user_model->invoice_sales($invoice);
  $data['invoices']=$this->user_model->oneinvoice($invoice, $userid);
  // $this->user_model->oneinvoice(); 
  $this->load->view('pdfinvoice', $data); 
}



public function login_user(){
 
  $email=$this->input->post('email');
  $password=md5($this->input->post('password'));


    $data=$this->user_model->login_user($email, $password);
      if($data)
      {
        $this->session->set_userdata('id',$data['id']);
        $this->session->set_userdata('email',$data['email']);
        $this->session->set_userdata('fullname',$data['fullname']);

        $this->load->view('dashboard.php');

      }
      else{
        $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
        $this->index(); 

      }
}



public function register_user(){

      $user=array(
      'fullname'=>$this->input->post('fullname'),
      'email'=>$this->input->post('email'),
      'password'=>md5($this->input->post('pass1'))
        );
        // print_r($user);

      $pass2 = md5($this->input->post('pass2'));

      if($pass2 != $user['password']){
        $this->session->set_flashdata('error_msg', 'Your passwords do not match. Try Again');
        $this->register();
      }
      else{
          $email_check=$this->user_model->email_check($user['email']);

          if($email_check){
            $this->user_model->register_user($user);
            $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
            $this->index();

          }
          else{

            $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
            $this->register();
          }
      }
}

public function biller_add(){
  $userid=$this->session->userdata('id');

  $new_name = time().$_FILES['profile_pic']['name'];
  $config['file_name'] = $new_name; 
  $config['upload_path']          = './img/logos';
  $config['allowed_types']        = 'jpg|png';
  // $config['max_size']             = 100;
  // $config['max_width']            = 1024;
  // $config['max_height']           = 768;

  $this->load->library('upload', $config);

  if ( ! $this->upload->do_upload('profile_pic')){
    $error = array('error' => $this->upload->display_errors());
    //update logo function logo do
  }
  
  else{
    $data = array('upload_data' => $this->upload->data());
    $data2=array(
      'user'=>$userid, 
      'company'=>$this->input->post('company'),
      'address'=>$this->input->post('address'),
      'city'=>$this->input->post('city'),
      'country'=>$this->input->post('country'),
      'phone'=>$this->input->post('phone'),
      'email'=>$this->input->post('email'),
      'website'=>$this->input->post('website'),
      'logo'=>$new_name, 
      'receipt'=>$this->input->post('receipt'),
      'invoice'=>$this->input->post('invoice')
    );
    $this->user_model->biller_add($data2);
    $this->session->set_flashdata('success_msg', 'Biller successfully added!');
    $this->add_biller(); 
  }
}

public function customer_add(){
  $userid=$this->session->userdata('id');

  // $new_name = time().$_FILES['profile_pic']['name'];
  // $config['file_name'] = $new_name; 
  // $config['upload_path']          = './img/logos';
  // $config['allowed_types']        = 'jpg|png';
  // $config['max_size']             = 100;
  // $config['max_width']            = 1024;
  // $config['max_height']           = 768;

  // $this->load->library('upload', $config);

  // if ( ! $this->upload->do_upload('profile_pic')){
  //   $error = array('error' => $this->upload->display_errors());
    //update logo function logo do
  // }
  
  // else{
    // $data = array('upload_data' => $this->upload->data());
    $data2=array(
      'user'=>$userid, 
      'company'=>$this->input->post('company'),
      'address'=>$this->input->post('address'),
      'city'=>$this->input->post('city'),
      'country'=>$this->input->post('country'),
      'phone'=>$this->input->post('phone'),
      'email'=>$this->input->post('email'),
      'website'=>$this->input->post('website'),
      'type'=>'1'
      // 'logo'=>$new_name, 
      // 'receipt'=>$this->input->post('receipt'),
      // 'invoice'=>$this->input->post('invoice')
    );
    $this->user_model->customer_add($data2);
    $this->session->set_flashdata('success_msg', 'Customer successfully added!');
    $this->add_customer(); 
  // }
}

public function sp_add(){
  $userid=$this->session->userdata('id');

    $data2=array(
      'user'=>$userid, 
      'descr'=>$this->input->post('sp')
    );
    $this->user_model->sp_add($data2);
    $this->session->set_flashdata('success_msg', 'Product/Service successfully added!');
    $this->add_sp();
}


public function supplier_add(){
  $userid=$this->session->userdata('id');
  $amount = $this->input->post('price1') + $this->input->post('price2') + $this->input->post('price3') + $this->input->post('price4') + $this->input->post('price5');

    $data2=array(
      'user'=>$userid, 
      'company'=>$this->input->post('company'),
      'address'=>$this->input->post('address'),
      'city'=>$this->input->post('city'),
      'country'=>$this->input->post('country'),
      'phone'=>$this->input->post('phone'),
      'email'=>$this->input->post('email'),
      'website'=>$this->input->post('website'),
      'type'=>'2',
      'amount'=>$amount
    );
    $this->user_model->supplier_add($data2);
    $this->session->set_flashdata('success_msg', 'Supplier successfully added!');
    $this->add_supplier();
}

public function invoice_add(){
  $userid=$this->session->userdata('id');

    $data2=array(
      'user'=>$userid,
      'biller'=>$this->input->post('biller'),
      'customer'=>$this->input->post('customer'),
      'reccurence'=>$this->input->post('reccurence'),
      'notes'=>$this->input->post('notes'),
      'type'=>'1'
    );

    $this->user_model->invoice_add($data2);
    $invoice = $this->user_model->get_invoice_number(); 

    $sales1=array(
      'invoice'=>$invoice,
      'product'=>$this->input->post('product1'),
      'price'=>$this->input->post('price1'),
      );
    $sales2=array(
      'invoice'=>$invoice,
      'product'=>$this->input->post('product2'),
      'price'=>$this->input->post('price2'),
      );
    $sales3=array(
      'invoice'=>$invoice,
      'product'=>$this->input->post('product3'),
      'price'=>$this->input->post('price3'),
      );
    $sales4=array(
      'invoice'=>$invoice,
      'product'=>$this->input->post('product4'),
      'price'=>$this->input->post('price4'),
      );
    $sales5=array(
      'invoice'=>$invoice,
      'product'=>$this->input->post('product5'),
      'price'=>$this->input->post('price5'),
      );
    if($sales1['product'] != ''){
      $this->user_model->invoice_item_add($sales1);
    }
    if($sales2['product'] != ''){
      $this->user_model->invoice_item_add($sales2);
    }
    if($sales3['product'] != ''){
      $this->user_model->invoice_item_add($sales3);
    }
    if($sales4['product'] != ''){
      $this->user_model->invoice_item_add($sales4);
    }
    if($sales5['product'] != ''){
      $this->user_model->invoice_item_add($sales5);
    }

    $this->session->set_flashdata('success_msg', 'Invoice successfully added!');
    $this->add_invoice();  
}

public function quotation_add(){
  $userid=$this->session->userdata('id');

    $data2=array(
      'user'=>$userid,
      'biller'=>$this->input->post('biller'),
      'customer'=>$this->input->post('customer'),
      'reccurence'=>'none',
      'notes'=>$this->input->post('notes'),
      'type'=>'0'
    );

    $this->user_model->invoice_add($data2);
    $invoice = $this->user_model->get_quotation_number(); 

    $sales1=array(
      'invoice'=>$invoice,
      'product'=>$this->input->post('product1'),
      'price'=>$this->input->post('price1'),
      );
    $sales2=array(
      'invoice'=>$invoice,
      'product'=>$this->input->post('product2'),
      'price'=>$this->input->post('price2'),
      );
    $sales3=array(
      'invoice'=>$invoice,
      'product'=>$this->input->post('product3'),
      'price'=>$this->input->post('price3'),
      );
    $sales4=array(
      'invoice'=>$invoice,
      'product'=>$this->input->post('product4'),
      'price'=>$this->input->post('price4'),
      );
    $sales5=array(
      'invoice'=>$invoice,
      'product'=>$this->input->post('product5'),
      'price'=>$this->input->post('price5'),
      );
    if($sales1['product'] != ''){
      $this->user_model->invoice_item_add($sales1);
    }
    if($sales2['product'] != ''){
      $this->user_model->invoice_item_add($sales2);
    }
    if($sales3['product'] != ''){
      $this->user_model->invoice_item_add($sales3);
    }
    if($sales4['product'] != ''){
      $this->user_model->invoice_item_add($sales4);
    }
    if($sales5['product'] != ''){
      $this->user_model->invoice_item_add($sales5);
    }

    $this->session->set_flashdata('success_msg', 'Quotation successfully added!');
    $this->add_invoice();  
}

public function receipt_add(){
    $userid=$this->session->userdata('id');

    $data2=array(
      'user'=>$userid,
      'invoice'=>$this->input->post('invoice'),
      'amount'=>$this->input->post('amount'),
      'type'=>$this->input->post('type'),
      'notes'=>$this->input->post('notes')
    );
    $this->user_model->receipt_add($data2);
    $this->session->set_flashdata('success_msg', 'Receipt successfully added!');
    $this->add_receipt();
}

public function payment_add(){
  
    $data2=array(
      'user'=>$this->session->userdata('id'),
      'biller'=>$this->input->post('biller'),
      'supplier'=>$this->input->post('supplier'),
      'amount'=>$this->input->post('amount'),
      'product'=>$this->input->post('product'),
      'receipt'=>$this->input->post('receipt')
    );
    $this->user_model->payment_add($data2);
    $this->session->set_flashdata('success_msg', 'Payment successfully added!');
    $this->add_payment();
}

public function delete_customer(){
  $customer = $this->uri->segment(3);
  $this->user_model->delete_customer($customer);
  $this->session->set_flashdata('success_msg', 'Customer successfully deleted!');
  $this->dashboard();
}

public function delete_payment(){
  $payment = $this->uri->segment(3);
  $this->user_model->delete_payment($payment);
  $this->session->set_flashdata('success_msg', 'Customer successfully deleted!');
  $this->dashboard();
}

public function delete_product(){
  $product = $this->uri->segment(3);
  $this->user_model->delete_product($product);
  $this->session->set_flashdata('success_msg', 'Customer successfully deleted!');
  $this->dashboard();
}



}

?>
