<?php class Tracker extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->helper('url');
    $this->load->database();
    $this->load->model('tracker_model');
    $this->load->library('session');
  }

   

  
}