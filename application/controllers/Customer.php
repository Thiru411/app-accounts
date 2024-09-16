<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

    var $data = array();
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->library('common');
        $this->load->helper('url');
        $this->load->model('AuthModel','am',TRUE);

    }
    public function customer_view(){
        $data=$this->common->check_session();
        $cust_details=$this->am->getallCustomers('customer');
      //  var_dump($cust_details);exit();
				if(!empty($cust_details)){
					$data['getdetails']=$cust_details;
                    $this->load->view('admin/customer_view',$data);
				}
				else {
                    $this->load->view('admin/customers-add',$data);
				}
			
 }
        public function getcustomer(){
            $data=$this->common->check_session();

            $cust_id= $this->input->post('id');
        //     $Content_Type = "application/json";
        //     $accessToken = globalAccessToken;
        //     $rent_header = array("Content-Type:$Content_Type", "accessToken:$accessToken");
        //     $data_array = array('client_id'=>$cust_id);
        //     $clienturl = authendpoint . "Auth/customer_details";
        //    echo $makecall = $this->common->callAPI('POST', $clienturl, json_encode($data_array), $rent_header);exit();
        //     $result = json_decode($makecall);
       $output=array();
		$customer_details = $this->am->get_customer_details($cust_id);
		    if(!empty($customer_details)){
			$client_result_id=$customer_details[0]->sk_client_id;
            $output['customer_address']=$this->am->get_customer_address($client_result_id);
            $output['customer_contact']=$this->am->get_customer_contact($client_result_id);
            $output['customer_other_details']=$this->am->get_customer_other_details($client_result_id);
			// $output=array("Client_details"=>$customer_details,"Customer_address"=>$customer_address,"Customer_contact"=>$customer_contact,"customer_other_details"=>$customer_other_details);  
            $output['client_details']=$customer_details;
            echo json_encode($output);    
        }
    }
    public function add_new_customer(){
        $data=$this->common->check_session();

        $this->load->view('admin/add-new-customer',$data);
    }
    public function customer_add(){
        $data=$this->common->check_session();
        $organization_id=$data['organization_id'];
          $customer_type=$this->input->post('customer_type');
        $salutation=$this->input->post('salutation');
        $first_name=$this->input->post('first_name');
        $back_order=$this->input->post('back_order');
        $back_order_days=$this->input->post('back_order_days');

        $company=$this->input->post('company');
        $cust_disp_name=$this->input->post('cust_disp_name');
        $cust_email=$this->input->post('cust_email');
        $cust_phone=$this->input->post('cust_phone');
        $cust_mobile=$this->input->post('cust_mobile');
        $website=$this->input->post('website');
        $currency=$this->input->post('currency');
         $opening_balance=$this->input->post('opening_balance');
         $payment_terms=$this->input->post('payment_terms');
         $order_cancellation=$this->input->post('order_cancellation');
        $due_days=$this->input->post('due_days');
        $limit_amount=$this->input->post('limit_amount');
        $interest_rate=$this->input->post('interest_rate');

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
        $phone1=$this->input->post('phone1');
        $phone2=$this->input->post('phone2');

        $fax=$this->input->post('fax');
        $Salutation1=$this->input->post('Salutation1');
        $purpose=$this->input->post('purpose');

        $first_name2=$this->input->post('first_name2');
        $last_name2=$this->input->post('last_name2');
        $email=$this->input->post('email');
        $work_phone=$this->input->post('work_phone');
       $mobile=$this->input->post('mobile');
        $transporter_name=$this->input->post('transporter_name');
       $contact_number=$this->input->post('contact_number');
       $address6=$this->input->post('address6'); 

       $client_data = array(
            'organization_id'=>$organization_id,
            'client_type'=>$customer_type,
            'primary_contact_ext'=>$salutation,
            'primary_contact'=>$first_name,
            'company_name'=>$company,
            'back_order'=>$back_order,
            'back_order_days'=>$back_order_days,
            'dispaly_name'=>$cust_disp_name,
            'email'=>$cust_email,
            'work_phone'=>$cust_phone,
            'work_mobile'=>$cust_mobile,
            'website'=>$website,
            'skype'=>$sky_number,
            'department'=>$department,
            'designation'=>$designation,
            'client_status'=>1,
            'user_type'=>'customer',
            'record_create_date'=>date("Y-m-d") ,
            'record_create_time'=>date("h:i:sa")
        );
        //var_dump($client_data);exit();
        $SaveData = $this->am->Save('mst_organization_client',$client_data);
        if($SaveData >0) {
        $client_address=array(
                'client_id'=>$SaveData,
                'organization_id'=>$organization_id,
                'address_type'=>'billing_address',
                'country_id'=>$country,
                'address_1'=>$street1,
                'address_2'=>$street2,
                'city'=>$city,
                'state'=>$state,
                'postalcode'=>$zipcode,
                'phone1'=>$phone1,
                'phone2'=>$phone2,
                'fax'=>$fax,
                'address_status'=>1,
                'record_create_date'=>date("Y-m-d") ,
                'record_create_time'=>date("h:i:sa")
        );

        $client_contact = array(
            'client_id'=>$SaveData,
            'organization_id'=>$organization_id,
            'salutation'=>$Salutation1,
            'full_name'=>$first_name2,
            'email'=>$email,
            'phone'=>$work_phone,
            'mobile'=>$mobile,
            'purpose'=>$purpose,
            'contact_status'=>1,
            'record_create_date'=>date("Y-m-d") ,
            'record_create_time'=>date("h:i:sa")
        );
        // /var_dump($client_address);
        $other_details=array(
            'client_id'=>$SaveData,
            'organization_id'=>$organization_id,
           // 'gst_treatment'=>$gst_treatment,
           // 'source_of_supply'=>$source_of_supply,
            'currency'=>$currency,
            'opening_balance'=>$opening_balance,
           // 'tds'=>$tds,
            'portal_lang'=>$portal_lang,
            'facebook'=>$facebook,
            'twitter'=>$twitter,
            'detail_status'=>1,
          //  'port_access'=>$portal_access,
            'payment_terms'=>$payment_terms,
            'record_create_date'=>date("Y-m-d") ,
            'record_create_time'=>date("h:i:sa")	
        );	
        $payment_term_details=array(
            'client_id'=>$SaveData,
            'organization_id'=>$organization_id,
            'order_cancelation_frequency'=>$order_cancellation,
            'due_days'=>$due_days,
            'limit_amount'=>$limit_amount,
            'interest_rate'=>$interest_rate,
            'payment_terms'=>$payment_terms,
            'payment_terms_status'=>1,
            'created_date'=>date("Y-m-d"),
            'created_time'=>date("h:i:sa")
        );
        $transport_details=array(
            'client_id'=>$SaveData,
            'organization_id'=>$organization_id,
            'transporter_name'=>$transporter_name,
            'contact_number'=>$contact_number,
            'address'=>$address6,
            'transport_status'=>1,
            'created_date'=>date("Y-m-d"),
            'created_time'=>date("h:i:sa")
        );

        $SaveAdreess = $this->am->Save('mst_organization_client_address',$client_address);
        $SaveClientDetails = $this->am->Save('mst_organization_client_contact',$client_contact);
        $SaveOtherDetails = $this->am->Save('mst_organization_client_other_details',$other_details);
        $SavePaymentTermsDetails = $this->am->Save('mst_organization_payment_terms',$payment_term_details);
        $SaveTransportDetails = $this->am->Save('mst_organization_client_transport_details',$transport_details);
        redirect('customer/customer-view');
    }
}
    public function businesstype(){
    $data=$this->common->check_session();
    $where=array('business_type_status'=>1);
    $output='';
    $existingbusinessType=$this->am->getRecords($where,'mst_business_type');
    $output="<br><select class='form-control' name='customer_type' id='exampleFormControlSelect1'>
    <option value=''>Select Business Type</option>";
    foreach ($existingbusinessType as $row)
		{
			
			$output=$output."<option value='$row->sk_business_type_id'>$row->business_type</option>" ;
			
		}
        $output=$output."</select>";
		echo $output;
    }
    public function purpose(){
        $data=$this->common->check_session();
        $where=array('purpose_status'=>1);
        $output='';
        $existingbusinessType=$this->am->getRecords($where,'mst_purpose');
        $output="<option value=''>Select Purpose</option>";
        foreach ($existingbusinessType as $row)
            {
                
                $output=$output."<option value='$row->sk_purpose_id'>$row->purpose</option>" ;
                
            }
            $output=$output."</select>";
            echo $output;
        }
}   
?>
    
   