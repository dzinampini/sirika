<?php class Bts extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->helper('url');
    $this->load->database();
    $this->load->model('bts_model');
    $this->load->model('welcome_model');
    $this->load->library('session');
  }

  public function daily(){
    $data['vehicles']=$this->welcome_model->myvehicles();
    $this->load->view('bt-daily.php', $data);
  }

  public function one(){
    $this->load->view('bt-one.php');
  }

  public function report(){
    $data['vehicles']=$this->welcome_model->myvehicles();
    $this->load->view('bt-report.php', $data);
  }

  



   

  
}