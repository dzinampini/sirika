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
}