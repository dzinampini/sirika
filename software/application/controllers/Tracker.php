<?php class Tracker extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->helper('url');
    $this->load->database();
    $this->load->model('tracker_model');
    $this->load->library('session');
  }

  public function locate(){
    $this->load->view('tr-locate.php');
  }

  public function history(){
    $this->load->view('tr-history.php');
  }

  public function notifications(){
    $data['notifications']=$this->tracker_model->mynotifications();
    $this->load->view('tr-notifications.php', $data);
  }

  public function report(){
    $this->load->view('tr-report.php');
  }



   

  
}