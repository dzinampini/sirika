<?php class Afc extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->helper('url');
    $this->load->database();
    $this->load->model('afc_model');
    $this->load->model('bts_model');
    $this->load->model('welcome_model');
    $this->load->library('session');
  }

  public function daily(){
    $data['vehicles']=$this->welcome_model->myvehicles();
    $this->load->view('afc-daily.php', $data);
  }

  public function one(){
    $this->load->view('afc-one.php');
  }

  public function report(){
    $this->load->view('afc-report.php');
  }

}