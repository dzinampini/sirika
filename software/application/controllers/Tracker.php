<?php class Tracker extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->helper('url');
    $this->load->database();
    $this->load->model('tracker_model');
    $this->load->library('session');
    $this->load->library('googlemaps');
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

  public function testmaps(){
    $config['center'] = '37.4419, -122.1419';
    $config['zoom'] = 'auto';
    $this->googlemaps->initialize($config);

    $polyline = array();
    $polyline['points'] = array(
      '37.429, -122.1319',
      '37.429, -122.1419',
      '37.4419, -122.1219'
    );
  $this->googlemaps->add_polyline($polyline);
  $data['map'] = $this->googlemaps->create_map();
  
  $this->load->view('test-maps.php', $data);
}



   

  
}