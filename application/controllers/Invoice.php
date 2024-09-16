<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller {

    var $data = array();
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->library('common');
        $this->load->helper('url');
    }
    public function getInvoices(){
        $data=$this->common->check_session();
        $organiztaion_id=$data['organization_id'];
        $Content_Type = "application/json";
        $accessToken = globalAccessToken;
        $rent_header = array("Content-Type:$Content_Type", "accessToken:$accessToken");
        $data_array = array("organization_id"=>$organiztaion_id);
        $clienturl = authendpoint . "Auth/customer_invoice";
        $makecall = $this->common->callAPI('POST', $clienturl, json_encode($data_array), $rent_header);
        $result = json_decode($makecall);
        $clienturl = authendpoint . "Auth/all_customer_details";
       $makecall1 = $this->common->callAPI('POST', $clienturl,json_encode($data_array), $rent_header);
        $result1 = json_decode($makecall1);
        $data_array = array("oragnization_id"=>$organiztaion_id);
        $clienturl = authendpoint . "Auth/all_items";
        $makecall2 = $this->common->callAPI('POST', $clienturl,json_encode($data_array), $rent_header);
        $result2 = json_decode($makecall2);
                     
        if($result->status!=false){
           
           $data['getdetails']=$result->data->bill_details;
            $this->load->view('admin/invoice-dashboard',$data);
        }
            else{
                $data['items']=$result2->data->item_details;
                $data['getdetails']=$result1->data->Client_details;
                $this->load->view('admin/new-invoice',$data);
        }
    }
    
    public function getInvoice(){
        $data=$this->common->check_session();
        $organiztaion_id=$data['organization_id'];
        $client_id=$this->uri->segment(3);
        $Content_Type = "application/json";
        $accessToken = globalAccessToken;
        $rent_header = array("Content-Type:$Content_Type", "accessToken:$accessToken");
        $data_array = array("client_id"=>$client_id);
        $clienturl = authendpoint . "Auth/getdetailsbyclientid";
        $makecall = $this->common->callAPI('POST', $clienturl, json_encode($data_array), $rent_header);
        $result = json_decode($makecall);
        $data_array = array("organization_id"=>$organiztaion_id);
        $clienturl = authendpoint . "Auth/customer_invoice";
        $makecall1 = $this->common->callAPI('POST', $clienturl, json_encode($data_array), $rent_header);
        $result1 = json_decode($makecall1);

                     
        if($result->status!=false && $result1->status!=false){
           
           $data['getdetails']=$result1->data->bill_details;
           $data['client_details']=$result->data->Client_bill_details;
           $data['cust_bill_sales_details']=$result->data->cust_bill_sales_details;
           $data['customer_address']=$result->data->customer_address;
           $data['customer_contact']=$result->data->customer_contact;
           $data['customer_other_details']=$result->data->customer_other_details;
            $this->load->view('admin/invoice',$data);
        }
    }
    public function add_invoice(){
        $data=$this->common->check_session();
        $organiztaion_id=$data['organization_id'];
        $data_array=array(
            "organization_id"=>$organiztaion_id,
            "client_id"=>$this->input->post('customer_id'),
            "invoice"=>$this->input->post('invoice_no'),
            "order_number"=>$this->input->post('order_no'),
            "invoice_date"=>$this->input->post('invoice_date'),
            "Salespersone"=>"thiru",
            "due_date"=>$this->input->post('due_date'),
            "Subject"=>$this->input->post('subject'),
            "sub_total"=>'100',
            "discount"=>'10000',
            "discount_type"=>"personel",
            "discount_amount"=>"50000",
            "adjustment"=>"1000",
            "total_tax"=>"100",
            "grand_total"=>"100000",
            "customer_note"=>$this->input->post('customer_notes'),
            "terms_conditions"=>$this->input->post('conditions'),
            "attachment"=>"img.jpg",
            "bill_template"=>"templet",
            "bill_status"=>1,
            "item_id"=>$this->input->post('select_item'),
            "quantity"=>$this->input->post('quantity'),
            "rate"=>$this->input->post('rate'),
            "amount"=>$this->input->post('amount'),
            "item_description"=>"gfbgfbg",
            "quantity"=>"200",
            "rate"=>"230",
            "tax_group"=>2000,
            "amount"=>"2030"
        );
        // );
        // $data_array=array(
        //     "organization_id"=>'-',
        //     "client_id"=>'customer_id',
        //     "invoice"=>'invoice_no',
        //     "order_number"=>'order_no',
        //     "invoice_date"=>'invoice_date',
        //     "Salespersone"=>"thiru",
        //     "due_date"=>'due_date',
        //     "Subject"=>'subject',
        //     "sub_total"=>'100',
        //     "discount"=>'10000',
        //     "discount_type"=>"personel",
        //     "discount_amount"=>"50000",
        //     "adjustment"=>"1000",
        //     "total_tax"=>"100",
        //     "grand_total"=>"100000",
        //     "customer_note"=>'customer_notes',
        //     "terms_conditions"=>'conditions',
        //     "attachment"=>"img.jpg",
        //     "bill_template"=>"templet",
        //     "bill_status"=>1,
        //     "item_id"=>'select_item',
        //     "quantity"=>'quantity',
        //     "rate"=>'rate',
        //     "amount"=>'amount',
        //     "item_description"=>"gfbgfbg",
        //     "quantity"=>"200",
        //     "rate"=>"230",
        //     "tax_group"=>2000,
        //     "amount"=>"2030"
        // );
     // var_dump($data_array);exit();
        $Content_Type = "application/json";
        $accessToken = globalAccessToken;
        $rent_header = array("Content-Type:$Content_Type", "accessToken:$accessToken");
       // $data_array = array("client_id"=>$client_id);
        $clienturl = authendpoint . "Auth/add_invoice";
       $makecall = $this->common->callAPI('POST', $clienturl, json_encode($data_array), $rent_header);
        $result = json_decode($makecall);
        if($result->status!=false){
            redirect("Invoice/getInvoices");
         }
    }
    public function new_invoice(){
        $data=$this->common->check_session();
        $organiztaion_id=$data['organization_id'];
        $Content_Type = "application/json";
        $accessToken = globalAccessToken;
        $rent_header = array("Content-Type:$Content_Type", "accessToken:$accessToken");
        $data_array = array("user_type"=>"customer");
        $clienturl = authendpoint . "Auth/all_customer_details";
        $makecall1 = $this->common->callAPI('POST', $clienturl,json_encode($data_array), $rent_header);
        $result1 = json_decode($makecall1);
        $data_array = array("oragnization_id"=>$organiztaion_id);
        $clienturl = authendpoint . "Auth/all_items";
       $makecall2 = $this->common->callAPI('POST', $clienturl,json_encode($data_array), $rent_header);
        $result2 = json_decode($makecall2);
        if($result1!=false && $result2!=false){
            $data['items']=$result2->data->item_details;
            $data['getdetails']=$result1->data->Client_details;
            $this->load->view('admin/new-invoice',$data);
        }
    }
}  
?>