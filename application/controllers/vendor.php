<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor extends CI_Controller {

    var $data = array();
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->library('common');
        $this->load->helper('url');
    }
    public function Vendor(){
        $data = $this->common->check_session();

        $Content_Type = "application/json";
        $accessToken = globalAccessToken;
        $rent_header = array("Content-Type:$Content_Type", "accessToken:$accessToken");
        $data_array = array("user_type"=>"vendor");
        $clienturl = authendpoint . "Auth/all_customer_details";
      $makecall = $this->common->callAPI('POST', $clienturl, json_encode($data_array), $rent_header);
        $result = json_decode($makecall);
                     
        if($result->status!=false){
           
           $data['getdetails']=$result->data->Client_details;
            $this->load->view('admin/Vendor-view',$data);
        }
            else{
           
            $this->load->view('admin/Vendors',$data);
        }
        }
    public function add_new_vendor(){
        $data=$this->common->check_session();

        $this->load->view('admin/add-new-vendor',$data);
    }
    public function vendor_add(){
        $data=$this->common->check_session();
        $data=$this->common->check_session();
        $organization_id=$data['organization_id'];
         $customer_type=$this->input->post('customer_type');
         $salutation=$this->input->post('salutation');
         $first_name=$this->input->post('first_name');
         $last_name=$this->input->post('last_name');
         $company=$this->input->post('company');
         $cust_disp_name=$this->input->post('cust_disp_name');
         $cust_email=$this->input->post('cust_email');
         $cust_phone=$this->input->post('cust_phone');
         $cust_mobile=$this->input->post('cust_mobile');
         $website=$this->input->post('website');
         $currency=$this->input->post('currency');
         $opening_balance=$this->input->post('opening_balance');
         $payment_terms=$this->input->post('payment_terms');
         $portal_access=$this->input->post('portal_access');
 
          $country=$this->input->post('country');
         $street1=$this->input->post('street1');
         $sky_number=$this->input->post('sky_number');
         $designation=$this->input->post('designation');
         $department=$this->input->post('department');
         $portal_lang=$this->input->post('portal_lang');
         $facebook=$this->input->post('facebook');
         $twitter=$this->input->post('twitter');
         $street2=$this->input->post('street2');
         $city=$this->input->post('city');
         $state=$this->input->post('state');
         $zipcode=$this->input->post('zipcode');
         $phone=$this->input->post('phone');
         $fax=$this->input->post('fax');
         $Salutation1=$this->input->post('Salutation1');
         $first_name2=$this->input->post('first_name2');
         $last_name2=$this->input->post('last_name2');
         $email=$this->input->post('email');
         $work_phone=$this->input->post('work_phone');
        $mobile=$this->input->post('mobile');
         
             $Content_Type = "application/json";
             $accessToken = globalAccessToken;
             $rent_header = array("Content-Type:$Content_Type", "accessToken:$accessToken");
             $data_array =array(
                 "organization_id"=>$organization_id,
                 "customer_type"=>$customer_type,
                 "primary_contact_salutation"=>$salutation,
                 "full_name"=>$first_name,
                 "last_name"=>$last_name,
                 "company_name"=>$company,
                 "customer_display_name"=>$cust_disp_name,
                 "customer_email"=>$cust_email,
                 "customer_work_phone"=>$cust_phone,
                 "customer_mobile"=>$cust_mobile,
                 "customer_website"=>$website,
                 "gst_treatment"=>"-",
                 "source_of_supply"=>"-",
                 "currency"=>$currency,
                 "opening_balance"=>$opening_balance,
                 "tds"=>"-",
                 "payment_terms"=>$payment_terms,
                 "address_type"=>"Billing Address",
                 "country_name"=>$country,
                 "address_1"=>$street1,
                 "address_2"=>$street2,
                 "city"=>$city,
                 "state"=>$state,
                 "postalcode"=>$zipcode,
                 "phone"=>"-",
                 "fax"=>'-',
 
 
                 "sky_number"=>'-',
                 "department"=>'-',
                 "designition"=>'-',
                 "portal_lang"=>$portal_lang,
 
                 "facebook"=>$facebook,
                 
                 'twitter'=>$twitter,
                 "portal_access"=>$portal_access,
                
                // "Salutation1"=>$Salutation1,
                 "user_type"=>"vendor"
             );
          
            $clienturl = authendpoint ."Auth/add_custumer";
           $makecall = $this->common->callAPI('POST', $clienturl, json_encode($data_array), $rent_header);
            $result = json_decode($makecall);
            if($result->status!=false){
                $this->load->view('admin/add-new-vendor');
        }
            else{
                $this->load->view('admin/add-new-vendor');
            }
    }
  }
?>