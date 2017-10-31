 <?php 
 defined('BASEPATH') OR exit('No direct script access allowed');
 /**
  Module: Userdashboard controller
  Author: Laxmi
  Created Date: 29/October/2017
 * */ 
 class userdashboard extends CI_Controller {
      function __construct() {
        parent::__construct();
        $this->load->model('Userdashboard_model','udashboard');
       
    }
    
    public function index(){
        $profileId = $this->session->userdata['user']['username'];
        $data = $this->udashboard->userdata($profileId);
        if($data){
        $result = array('data'=>$data);
        $this->load->view('userDashboard',$result);
        }
    }
    }
?>