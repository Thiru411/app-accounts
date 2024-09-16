<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

    var $data = array();
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->library('common');
        $this->load->helper('url');
		$this->load->model('settingsModel','sm',TRUE);
    }
/******************************************************************************/

    public function businesstype(){
        $data=$this->common->check_session();
        $existingbusinessType=$this->sm->getSettings('mst_business_type');
        // var_dump($existingbusinessType);
         if($existingbusinessType){
            $data['existingbusinessType']=$existingbusinessType;
            $this->load->view('admin/settings/business_type/viewBusinessType',$data);
        }else{
            $this->load->view('admin/settings/business_type/addbusinessType',$data);
        }
    }

    public function add_business_Type(){
        $data=$this->common->check_session();
        $this->load->view('admin/settings/business_type/addbusinessType',$data);

    }
    public function addbusinesstype(){
        $data=$this->common->check_session();
       $business_type = $this->input->post('business_type');
       $where=array('business_type'=>$business_type);
       $existingbusiness_type=$this->sm->getRecords($where,'mst_business_type');
       if($existingbusiness_type!=true){
           $dataArray=array(
               'business_type'=>$business_type,
               'business_type_status'=>1
           );
           $savedCategory=$this->sm->save($dataArray,'mst_business_type');
           redirect('settings/businesstype');
       }
       else{
        redirect('settings/businesstype');  
       }
    }

    public function businesstypeupdate() {
        $data=$this->common->check_session();
        $operation = $this->uri->segment(3);
		 $business_type_id = base64_decode($this->uri->segment(4));
		if($operation=='edit') {
            $where=array('sk_business_type_id'=>$business_type_id);
			$business_type_details=$this->sm->getRecords($where,'mst_business_type');
			foreach($business_type_details as $inf)
			{
				$data['business_type_id']=$inf->sk_business_type_id;
				$data['business_type']=$inf->business_type;
				$data['business_type_status']=$inf->business_type_status;
			}
			$this->load->view('admin/settings/business_type/business-type-edit',$data);
		}
		else if($operation=='delete') {
			$save_data = array(
                "business_type_status"=>0
			);
			$this->sm->Update('mst_business_type','sk_business_type_id',$business_type_id,$save_data);
			redirect('settings/businesstype');
		}
		else if($operation=='active') {
			$save_data = array(
					"business_type_status"=>1
			);
			$this->sm->Update('mst_business_type','sk_business_type_id',$business_type_id,$save_data);
			redirect('settings/businesstype');
		}
		else if($operation=='update') {
			$id=base64_decode($this->uri->segment(4));
			$business_type=$this->input->post('business_type');
						 $save_data = array(
						'business_type'=>$business_type,
					 );
						
			$this->sm->Update('mst_business_type','sk_business_type_id',$id,$save_data);
			redirect('settings/businesstype');
		}
	}
/***************************business Type*******************************/

/*********************************purpose**************************************/
    public function purpose(){
        $data=$this->common->check_session();
        $existingpurpose=$this->sm->getSettings('mst_purpose');
        // var_dump($existingbusinessType);
         if($existingpurpose){
            $data['existingpurpose']=$existingpurpose;
            $this->load->view('admin/settings/purpose/view-purpose',$data);
        }else{
            $this->load->view('admin/settings/purpose/add-purpose',$data);
        }
    }

    public function add_purpose(){
        $data=$this->common->check_session();
        $this->load->view('admin/settings/purpose/add-purpose',$data);

    }
    public function addpurpose(){
        $data=$this->common->check_session();
       $purpose = $this->input->post('purpose');
       $where=array('purpose'=>$purpose);
       $existingpurpose=$this->sm->getRecords($where,'mst_purpose');
       if($existingpurpose!=true){
           $dataArray=array(
               'purpose'=>$purpose,
               'purpose_status'=>1
           );
           $savedCategory=$this->sm->save($dataArray,'mst_purpose');
           redirect('settings/purpose');
       }
       else{
        redirect('settings/purpose');  
       }
    }

    public function purposeupdate() {
        $data=$this->common->check_session();
        $operation = $this->uri->segment(3);
		 $purpose_id = base64_decode($this->uri->segment(4));
		if($operation=='edit') {
            $where=array('sk_purpose_id'=>$purpose_id);
			$purpose_details=$this->sm->getRecords($where,'mst_purpose');
			foreach($purpose_details as $inf)
			{
				$data['purpose_id']=$inf->sk_purpose_id;
				$data['purpose']=$inf->purpose;
				$data['purpose_status']=$inf->purpose_status;
			}
			$this->load->view('admin/settings/purpose/purpose-edit',$data);
		}
		else if($operation=='delete') {
			$save_data = array(
                "purpose_status"=>0
			);
			$this->sm->Update('mst_purpose','sk_purpose_id',$purpose_id,$save_data);
			redirect('settings/purpose');
		}
		else if($operation=='active') {
			$save_data = array(
					"purpose_status"=>1
			);
			$this->sm->Update('mst_purpose','sk_purpose_id',$purpose_id,$save_data);
			redirect('settings/purpose');
		}
		else if($operation=='update') {
			$id=base64_decode($this->uri->segment(4));
			$purpose=$this->input->post('purpose');
						 $save_data = array(
						'purpose'=>$purpose,
					 );
						
			$this->sm->Update('mst_purpose','sk_purpose_id',$id,$save_data);
			redirect('settings/purpose');
		}
	}
/*********************************purpose**************************************/



/*********************************type of customer**************************************/

public function customertype(){
    $data=$this->common->check_session();
    $existingCustomerType=$this->sm->getSettings('mst_customer_type');
    // var_dump($existingbusinessType);
     if($existingCustomerType){
        $data['existingCustomerType']=$existingCustomerType;
        $this->load->view('admin/settings/customerType/view-customer-type',$data);
    }else{
        $this->load->view('admin/settings/customerType/add-customer-type',$data);
    }
}

public function add_customer_type(){
    $data=$this->common->check_session();
    $this->load->view('admin/settings/customerType/add-customer-type',$data);

}
public function addcustomertype(){
    $data=$this->common->check_session();
   $customer_type = $this->input->post('customer_type');
   $where=array('customer_type'=>$customer_type);
   $existingCustomerType=$this->sm->getRecords($where,'mst_customer_type');
   if($existingCustomerType!=true){
       $dataArray=array(
           'customer_type'=>$customer_type,
           'customer_type_status'=>1
       );
       $savedCategory=$this->sm->save($dataArray,'mst_customer_type');
       redirect('settings/customertype');
   }
   else{
    redirect('settings/customertype');  
   }
}

public function customertypeupdate() {
    $data=$this->common->check_session();
    $operation = $this->uri->segment(3);
     $sk_customer_type_id = base64_decode($this->uri->segment(4));
    if($operation=='edit') {
        $where=array('sk_customer_type_id'=>$sk_customer_type_id);
        $customer_type_details=$this->sm->getRecords($where,'mst_customer_type');
        foreach($customer_type_details as $inf)
        {
            $data['sk_customer_type_id']=$inf->sk_customer_type_id;
            $data['customer_type']=$inf->customer_type;
            $data['customer_type_status']=$inf->customer_type_status;
        }
        $this->load->view('admin/settings/customerType/customer-type-edit',$data);
    }
    else if($operation=='delete') {
        $save_data = array(
            "customer_type_status"=>0
        );
        $this->sm->Update('mst_customer_type','sk_customer_type_id',$sk_customer_type_id,$save_data);
        redirect('settings/customertype');
    }
    else if($operation=='active') {
        $save_data = array(
                "customer_type_status"=>1
        );
        $this->sm->Update('mst_customer_type','sk_customer_type_id',$sk_customer_type_id,$save_data);
        redirect('settings/customertype');
    }
    else if($operation=='update') {
        $id=base64_decode($this->uri->segment(4));
        $customerType=$this->input->post('customerType');
                     $save_data = array(
                    'customer_type'=>$customerType,
                 );
                    
        $this->sm->Update('mst_customer_type','sk_customer_type_id',$id,$save_data);
        redirect('settings/customertype');
    }
}
/*********************************type of customer**************************************/


/**************************************Category1***************************************/

public function category1(){
    $data=$this->common->check_session();
    $existingCategory1=$this->sm->getSettings('mst_category1');
    // var_dump($existingbusinessType);
     if($existingCategory1){
        $data['existingCategory1']=$existingCategory1;
        $this->load->view('admin/settings/category1/view-category1',$data);
    }else{
        $this->load->view('admin/settings/category1/add-category1',$data);
    }
}

public function add_category1(){
    $data=$this->common->check_session();
    $this->load->view('admin/settings/category1/add-category1',$data);

}
public function addCategory1(){
    $data=$this->common->check_session();
   $category1 = $this->input->post('category1');
   $where=array('category1'=>$category1);
   $existingCategory1=$this->sm->getRecords($where,'mst_category1');
   if($existingCategory1!=true){
       $dataArray=array(
           'category1'=>$category1,
           'category1_status'=>1
       );
       $savedCategory=$this->sm->save($dataArray,'mst_category1');
       redirect('Settings/category1');
   }
   else{
    redirect('Settings/category1');  
   }
}

public function category1update() {
    $data=$this->common->check_session();
    $operation = $this->uri->segment(3);
     $category1_id = base64_decode($this->uri->segment(4));
    if($operation=='edit') {
        $where=array('sk_category1_id'=>$category1_id);
        $category1_details=$this->sm->getRecords($where,'mst_category1');
        foreach($category1_details as $inf)
        {
            $data['sk_category1_id']=$inf->sk_category1_id;
            $data['category1']=$inf->category1;
            $data['category1_status']=$inf->category1_status;
        }
        $this->load->view('admin/settings/category1/category1-edit',$data);
    }
    else if($operation=='delete') {
        $save_data = array(
            "category1_status"=>0
        );
        $this->sm->Update('mst_category1','sk_category1_id',$category1_id,$save_data);
        redirect('settings/category1');
    }
    else if($operation=='active') {
        $save_data = array(
                "category1_status"=>1
        );
        $this->sm->Update('mst_category1','sk_category1_id',$category1_id,$save_data);
        redirect('settings/category1');
    }
    else if($operation=='update') {
        $id=base64_decode($this->uri->segment(4));
        $category1=$this->input->post('category1');
                     $save_data = array(
                    'category1'=>$category1,
                 );
                    
        $this->sm->Update('mst_category1','sk_category1_id',$id,$save_data);
        redirect('settings/category1');
    }
}

/**************************************Category1***************************************/


/**************************************Category1***************************************/
public function category2(){
    $data=$this->common->check_session();
    $existingCategory2=$this->sm->getSettings('mst_category2');
    // var_dump($existingbusinessType);
     if($existingCategory2){
        $data['existingCategory2']=$existingCategory2;
        $this->load->view('admin/settings/category2/view-category2',$data);
    }else{
        $this->load->view('admin/settings/category2/add-category2',$data);
    }
}

public function add_category2(){
    $data=$this->common->check_session();
    $this->load->view('admin/settings/category2/add-category2',$data);

}
public function addcategory2(){
    $data=$this->common->check_session();
   $category2 = $this->input->post('category2');
   $where=array('category2'=>$category2);
   $existingCategory2=$this->sm->getRecords($where,'mst_category2');
   if($existingCategory2!=true){
       $dataArray=array(
           'category2'=>$category2,
           'category2_status'=>1
       );
       $savedCategory=$this->sm->save($dataArray,'mst_category2');
       redirect('settings/category2');
   }
   else{
    redirect('settings/category2');  
   }
}

public function category2update() {
    $data=$this->common->check_session();
    $operation = $this->uri->segment(3);
     $category2_id = base64_decode($this->uri->segment(4));
    if($operation=='edit') {
        $where=array('sk_category2_id'=>$category2_id);
        $category2_details=$this->sm->getRecords($where,'mst_category2');
        foreach($category2_details as $inf)
        {
            $data['sk_category2_id']=$inf->sk_category2_id;
            $data['category2']=$inf->category2;
            $data['category2_status']=$inf->category2_status;
        }
        $this->load->view('admin/settings/category2/category2-edit',$data);
    }
    else if($operation=='delete') {
        $save_data = array(
            "category2_status"=>0
        );
        $this->sm->Update('mst_category2','sk_category2_id',$category2_id,$save_data);
        redirect('settings/category2');
    }
    else if($operation=='active') {
        $save_data = array(
                "category2_status"=>1
        );
        $this->sm->Update('mst_category2','sk_category2_id',$category2_id,$save_data);
        redirect('settings/category2');
    }
    else if($operation=='update') {
        $id=base64_decode($this->uri->segment(4));
        $category2=$this->input->post('category2');
                     $save_data = array(
                    'category2'=>$category2,
                 );
                    
        $this->sm->Update('mst_category2','sk_category2_id',$id,$save_data);
        redirect('ettings/category2');
    }
}
/**************************************Category1***************************************/


    }
?>