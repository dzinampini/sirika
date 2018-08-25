<?php class Bts extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->helper('url');
    $this->load->database();
    $this->load->model('Bts_model');
    $this->load->library('session');
  }

  public function daily(){
    $this->load->view('bt-daily.php');
  }

  public function one(){
    $this->load->view('bt-one.php');
  }

  public function report(){
    $this->load->view('bt-report.php');
  }



   

  
}