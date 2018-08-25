<?php class Welcome extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->helper('url');
    $this->load->database();
    $this->load->model('welcome_model');
    $this->load->library('session');
  }

  public function index(){
    $this->load->view('welcome.php');
  }

  public function login(){
    $this->load->view('login');
  }

  public function mycompany(){
    $data['companies']=$this->welcome_model->mycompany();
    $data['staff']=$this->welcome_model->mystaff();
    $this->load->view('mycompany.php', $data);

  }

  public function myvehicles(){
    $data['vehicles']=$this->welcome_model->myvehicles();
    $this->load->view('myvehicles.php', $data);
  }

  public function addvehicle(){
    $this->load->view('addvehicle.php');
  }

  public function preferences(){
    $this->load->view('preferences.php');
  }

  public function dashboard(){
    //if no session data redirect to login 
    //if there is login data 
    $this->load->view('dashboard');   
}

  public function login_user(){
    $email=$this->input->post('email');
    $password=md5($this->input->post('password'));
    
    $data=$this->welcome_model->login_user($email, $password);
    if($data){
      $this->session->set_userdata('id',$data['id']);
      $this->session->set_userdata('email',$data['email']);
      $this->session->set_userdata('company',$data['company']);
      $this->session->set_userdata('fullname',$data['fullname']);

      $this->dashboard(); 
    }
    else{
      $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
      $this->login(); 
    }
  }
public function logout()
{
  $this->session->sess_destroy();
    $this->index(); 
}
  
}