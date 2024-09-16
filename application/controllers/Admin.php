<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    var $data = array();
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->library('common');
        $this->load->helper('url');
    }
    
    
    public function index(){
        $this->load->view('login-page');
    }
    
   // check username and password.
   public function login_check(){
    $email=$this->input->post('exampleInputEmail1');
    $password=$this->input->post('exampleInputPassword1');
    if(isset($email)&&isset($password)){
        $Content_Type = "application/json";
        $accessToken = globalAccessToken;
        $rent_header = array("Content-Type:$Content_Type", "accessToken:$accessToken");
        $data_array = array('email'=>$email,'password'=>$password);
        $clienturl = authendpoint . "Auth/signin";
 $makecall = $this->common->callAPI('POST', $clienturl, json_encode($data_array), $rent_header); 
        $result = json_decode($makecall);

        
       if($result->status!=false){
          $this->session->set_userdata('userAccessToken',$result->data->userAccessToken);
          $this->session->set_userdata('Roll_Id',$result->data->Roll_Id);
          $this->session->set_userdata('Roll_name',$result->data->Roll_name);
          $this->session->set_userdata('Organization_id',$result->data->organization_id);
          redirect("admin/dashboard");
       }
       else{
          $this->session->set_flashdata('loginStatus',$result->message);
          redirect("admin/");
          //echo json_encode(['status'=>false,'message'=>'invalid username or password','data'=>[]]);
       }
    }
}
   
   
   // to load dashboad page 
   public function dashboard(){
    $data=$this->common->check_session();
    $this->load->view("admin/dashboard",$data);
}
   public function logout(){
    $data=$this->common->check_session();

    session_destroy();
    redirect('admin/index');   }
   
}
?>