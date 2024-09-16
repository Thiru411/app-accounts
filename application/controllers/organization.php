<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Organization extends CI_Controller {

    var $data = array();
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->library('common');
        $this->load->helper('url');
    }
    public function add_organization(){
        $data=$this->common->check_session();
        $data['form_method']="post";
        $user_id=$data['userAccessToken'];
        $Content_Type = "application/json";
        $accessToken = globalAccessToken;
        $rent_header = array("Content-Type:$Content_Type", "accessToken:$accessToken");
        $data_array = array("user_id"=>$user_id);
    // var_dump($data_array);exit();
        $clienturl = authendpoint . "Auth/get_org_details";
       $makecall = $this->common->callAPI('POST', $clienturl,json_encode($data_array), $rent_header);
        $result = json_decode($makecall);
        $clienturl=authendpoint. "Auth/getAllDetails";
        $makecall1 = $this->common->callAPI('POST', $clienturl,json_encode($data_array), $rent_header);
        $result1 = json_decode($makecall1);
        if($result->status!=false){
			$data['form_method']='put';
            $data['org_details']=$result->data->org_details;
            $data['industry']=$result1->data->industry;
            $data['countries']=$result1->data->countries;
            $data['states']=$result1->data->states;
            $data['fiscal_year']=$result1->data->fiscal;
            $data['dateformat']=$result1->data->dateformat;
            $data['timezone']=$result1->data->timezone;
            $data['reportBasis']=$result1->data->reportBasis;
            $this->load->view('admin/edit-organization',$data);
        }
        else{
            $data['industry']=$result1->data->industry;
            $data['user_details']=$result1->data->user_details;
           // var_dump($data);exit();
            $data['countries']=$result1->data->countries;
            $data['states']=$result1->data->states;
            $data['fiscal_year']=$result1->data->fiscal;
            $data['dateformat']=$result1->data->dateformat;
            $data['timezone']=$result1->data->timezone;
            $data['reportBasis']=$result1->data->reportBasis;
            $this->load->view('admin/new-organization',$data);
        }
     }
    
     public function save_org(){
        $data=$this->common->check_session();
               // $organization_logo=$picName;
                $organization_name=$this->input->post('org_name');
               $industry_id=$this->input->post('industry');
                $address_1=$this->input->post('address1');
                $address_2=$this->input->post('address2');
                $city=$this->input->post('city');
                $upload_file=$this->input->post('upload_file');
                $upload_file=base64_encode($upload_file);
                $mobile=$this->input->post('mobile');
                $fax=$this->input->post('fax');
                $website=$this->input->post('website');
                $sender_email=$this->input->post('sender_email');
                $postalcode=$this->input->post('zip');
                $financial_year=$this->input->post('fiscal');
                $report_basis=$this->input->post('repoer_basis');
                $date_format=$this->input->post('dateformat');
                $date_format_seperator=$this->input->post('dateseparator');
                $timezone_id=$this->input->post('timezone');
                $country_id=$this->input->post('country');
                $state_id=$this->input->post('state');
                $organization_id=$this->input->post('org_id');
                $method=$this->input->post('method');
                    if($method=='put'){
                    $Content_Type = "application/json";
                    $accessToken = globalAccessToken;
                    $rent_header = array("Content-Type:$Content_Type", "accessToken:$accessToken");
                    $data_array =array(
                        "organization_id"=>$organization_id,
                        "organization_name"=>$organization_name,
                        "organization_logo"=>'112.jpg',
                        "industry_id"=>$industry_id,
                        "address_1"=>$address_1,
                        "address_2"=>$address_2,
                        "city"=>$city,
                        "state_id"=>$state_id,
                        "postalcode"=>$postalcode,
                        "mobile"=>$mobile,
                        "fax"=>$fax,
                        "website"=>$website,
                        "financial_year"=>$financial_year,
                        "report_basis"=>$report_basis,
                        "timezone_id"=>$timezone_id,
                        "date_format_id"=>$date_format,
                        "date_format_seperator"=>$date_format_seperator,
                        "country_id"=>$country_id
                    );
                   $Content_Type = "application/json";
                   $accessToken = globalAccessToken;
                   $rent_header = array("Content-Type:$Content_Type", "accessToken:$accessToken");
                   $clienturl = authendpoint ."Auth/organization_update";
                  // $data_array=array("organization_id"=>$organization_id);
                   $makecall = $this->common->callAPI('POST', $clienturl, json_encode($data_array), $rent_header);
            
                    $result = json_decode($makecall);
                    }
                    else{
                        $Content_Type = "application/json";
                        $accessToken = globalAccessToken;
                        $rent_header = array("Content-Type:$Content_Type", "accessToken:$accessToken");
                        $data_array =array(
                            "organization_logo"=>$upload_file,
                            "organization_name"=>$organization_name,
                            "industry_id"=>$industry_id,
                            "address_1"=>$address_1,
                            "address_2"=>$address_2,
                            "city"=>$city,
                            "mobile"=>$mobile,
                            "fax"=>$fax,
                            "website"=>$website,
                            "sender_email"=>"amaresh@codebel.com",
                            "postalcode"=>$postalcode,
                            "financial_year"=>$financial_year,
                            "report_basis"=>$report_basis,
                            "date_format"=>$date_format,
                            "date_format_seperator"=>$date_format_seperator,
                            "timezone_id"=>$timezone_id,
                            "country_id"=>$country_id,
                            "state_id"=>$state_id
                        );
                      // var_dump($data_array);exit();
                       $Content_Type = "application/json";
                       $accessToken = globalAccessToken;
                       $rent_header = array("Content-Type:$Content_Type", "accessToken:$accessToken");
                       $clienturl = authendpoint ."Auth/add_organization";
                       $makecall = $this->common->callAPI('POST', $clienturl, json_encode($data_array), $rent_header);
                
                        $result = json_decode($makecall);
                    }
                   // var_dump($result);exit();
                    if($result->status!=false){
                        redirect('Organization/add_organization',$data);
                }
                    else{
                        redirect('Organization/add_organization',$data);
            
                    }
       }
}
?>