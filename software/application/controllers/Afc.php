<?php class Afc extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->helper('url');
    $this->load->database();
    $this->load->model('Afc_model');
    $this->load->library('session');
  }

  public function daily(){
    $this->load->view('afc-daily.php');
  }

  public function one(){
    $this->load->view('afc-one.php');
  }

  public function report(){
    $this->load->view('afc-report.php');
  }

}