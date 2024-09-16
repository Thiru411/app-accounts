<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {

    var $data = array();
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->library('common');
        $this->load->helper('url');
		$this->load->model('itemsModel','im',TRUE);
    }
    
    public function getItems(){
     
            $data=$this->common->check_session();
            $organization_id=$data['organization_id'];
            $Content_Type = "application/json";
            $accessToken = globalAccessToken;
            $rent_header = array("Content-Type:$Content_Type", "accessToken:$accessToken");
            $data_array = array("oragnization_id"=>$organization_id);
            $clienturl = authendpoint . "Auth/getItemDetailsByorgId";
            $makecall = $this->common->callAPI('POST', $clienturl, json_encode($data_array), $rent_header);
            $result = json_decode($makecall);
                         
            if($result->status!=false){
               
               $data['getdetails']=$result->data->item_details;
                $this->load->view('admin/items',$data);
            }
            else{
               
                $this->load->view('admin/items-add',$data);
            }
        }
    
    
        public function getItem(){
     
            $data=$this->common->check_session();
            //$organization_id=$data['organization_id'];
            $item_id=$this->input->post('id');
            $Content_Type = "application/json";
            $accessToken = globalAccessToken;
            $rent_header = array("Content-Type:$Content_Type", "accessToken:$accessToken");
            $data_array = array("item_id"=>$item_id);
            $clienturl = authendpoint . "Auth/getItemDetails";
            echo $makecall = $this->common->callAPI('POST', $clienturl, json_encode($data_array), $rent_header);exit();
            $result = json_decode($makecall);
                         
            if($result->status!=false){
               
               $data['getdetails']=$result->data->item_details;
        }
    }





    /********************************category****************************/

    public function category(){
        $data=$this->common->check_session();
        $existingCategory=$this->im->getCategory('mst_category');
        if($existingCategory){
            $data['existingCategory']=$existingCategory;
            $this->load->view('admin/items/viewCategory',$data);
        }else{
            $this->load->view('admin/items/categoryView',$data);
        }
    }
    public function add_category(){
        $data=$this->common->check_session();
        $this->load->view('admin/items/categoryView',$data);
    }


    public function categoryadd(){
        $data=$this->common->check_session();
       $categoryName = $this->input->post('category_name');
       $where=array('categoryName'=>$categoryName);
       $existingCategory=$this->im->getRecords($where,'mst_category');
       if($existingCategory!=true){
           $dataArray=array(
               'categoryName'=>$categoryName,
               'categoryStatus'=>1
           );
           $savedCategory=$this->im->save($dataArray,'mst_category');
           redirect('item/category');
       }
       else{
        redirect('item/category');  
       }
    }



    public function categoryupdate() {
        $data=$this->common->check_session();
        $operation = $this->uri->segment(3);
		 $category_id = base64_decode($this->uri->segment(4));
		if($operation=='edit') {
			$category_details=$this->im->getItemDetailsById('mst_category',$category_id);
			foreach($category_details as $inf)
			{
				$data['category_id']=$inf->sk_category_id;
				$data['categoryName']=$inf->categoryName;
				$data['categoryStatus']=$inf->categoryStatus;
			}
			$this->load->view('admin/items/category-edit',$data);
		}
		else if($operation=='delete') {
			$save_data = array(
                "categoryStatus"=>0
			);
			$this->im->Update('mst_category','sk_category_id',$category_id,$save_data);
			redirect('item/category');
		}
		else if($operation=='active') {
			$save_data = array(
					"categoryStatus"=>1
			);
			$this->im->Update('mst_category','sk_category_id',$category_id,$save_data);
			redirect('item/category');
		}
		else if($operation=='update') {
			$id=base64_decode($this->uri->segment(4));
			$category_name=$this->input->post('category_name');
						 $save_data = array(
						'categoryName'=>$category_name,
					 );
						
			$this->im->Update('mst_category','sk_category_id',$id,$save_data);
			redirect('item/category');
		}
	}

        /********************************category****************************/


                /********************************************sub Category****************************/

    public function subcategory(){
        $data=$this->common->check_session();
        $existingSubCategory=$this->im->getSubCategory('mst_subcategory');
        if($existingSubCategory){
            $data['existingSubCategory']=$existingSubCategory;
            $this->load->view('admin/items/viewsubcategory',$data);
        }else{
            $this->load->view('admin/items/subcategoryAdd',$data);
        }  
    }
    public function addsubcategory(){
        $data=$this->common->check_session();
        $this->load->view('admin/items/subcategoryAdd',$data);
    }

    public function subcategoryadd(){
        $data=$this->common->check_session();
       $categoryId = $this->input->post('category');
       $subCategory = $this->input->post('subCategory');

       $where=array('subCategoryName'=>$subCategory);
       $existingsubCategory=$this->im->getRecords($where,'mst_subcategory');
       if($existingsubCategory!=true){
           $dataArray=array(
               'category_id'=>$categoryId,
               'subCategoryName'=>$subCategory,
               'subCategoryStatus'=>1
           );
           $savedCategory=$this->im->save($dataArray,'mst_subCategory');
           redirect('item/subcategory');
       }
       else{
        redirect('item/subcategory');  
       }
    }

    public function subcategoryupdate() {
        $data=$this->common->check_session();
        $operation = $this->uri->segment(3);
		 $subCategoryId = base64_decode($this->uri->segment(4));
		if($operation=='edit') {
			$subcategory_details=$this->im->getsubcategoryById('mst_subcategory',$subCategoryId);
			foreach($subcategory_details as $inf)
			{
				$data['subcategory_id']=$inf->sk_subCategory_id;
                $data['category_id']=$inf->category_id;
				$data['subcategoryName']=$inf->subCategoryName;
				$data['subcategoryStatus']=$inf->subCategoryStatus;
			}
			$this->load->view('admin/items/subcategory-edit',$data);
		}
		else if($operation=='delete') {
			$save_data = array(
                "subCategorystatus"=>0
			);
			$this->im->Update('mst_subCategory','sk_subCategory_id',$subCategoryId,$save_data);
			redirect('item/subcategory');
		}
		else if($operation=='active') {
			$save_data = array(
					"subCategorystatus"=>1
			);
			$this->im->Update('mst_subCategory','sk_subCategory_id',$subCategoryId,$save_data);
			redirect('item/subcategory');
		}
		else if($operation=='update') {
			 $id=base64_decode($this->uri->segment(4));
			$subCategory=$this->input->post('subCategory');
						 $save_data = array(
                        'subCategoryName'=>$subCategory,
						'category_id'=>$this->input->post('category'),
					 );						
			$this->im->Update('mst_subCategory','sk_subCategory_id',$id,$save_data);
			redirect('item/subcategory');
		}
	}

        /********************************************sub Category****************************/
    public function itemsdetails(){
        $data=$this->common->check_session();
        $existingItem=$this->im->getItemDetails('mst_item');
        if($existingItem){
            $data['existingItem']=$existingItem;
            $this->load->view('admin/items/viewItems',$data);
        }else{
            $this->load->view('admin/items/add_items',$data);
        }  
    }

    public function getcategory()
	{
        $data=$this->common->check_session();
		$category = $this->input->post('category',TRUE);
		$data['subCategoiry']=$this->im->getsubcategorybycat($category);
		$output .= "<option value=''>Select Section</option>";
		foreach ($data['subCategoiry'] as $row)
		{
			$output .= "<option value='$row->sk_subCategory_id'>".$row->subCategoryName."</option>";
		}
		echo $output;
	}


    /******************************************Items************************/
    public function additem()
	{
        $data=$this->common->check_session();
        $part_no=$this->input->post('part_no');
        $where=array('part_no'=>$part_no);
        $existing_item=$this->im->getRecords($where,'mst_item');
        if($existing_item==''){
        $dataArray=array(
		'category_id' => $this->input->post('category'),
        'subCategory_id' => $this->input->post('subcategory'),
		'part_no' => $part_no,
		'item_name' => $this->input->post('item_name'),
		'mrp' => $this->input->post('mrp'),
        'count_rate' => $this->input->post('count_rate'),
	    'l_dealer_rate' => $this->input->post('l_dealer'),
		's_dealer_rate' => $this->input->post('s_dealer'),
		'opening_qty' => $this->input->post('open_qty'),
		'tax_percent' => $this->input->post('tax'),
		'min_order_lvl' => $this->input->post('min_order'),
		're_order_lvl' => $this->input->post('re_order'),
		'max_order_lvl' => $this->input->post('max_order'),
		'location' => $this->input->post('location'),
		'discount_cat' => $this->input->post('discount'),
		'purchase_rate' => $this->input->post('purchase_rate'),
		'hsn_code' => $this->input->post('hsn'),
        'item_status'=>1
        );
        $this->im->save($dataArray,'mst_item');
        redirect('item/itemsdetails');
        }
        else{
            redirect('item/itemsdetails');
        }
    }

    public function itemupdate() {
        $data=$this->common->check_session();
        $operation = $this->uri->segment(3);
		 $item_id = base64_decode($this->uri->segment(4));
		if($operation=='edit') {
			$item_details=$this->im->getitemsbyid('mst_item',$item_id);
			foreach($item_details as $inf)
			{
				$data['subCategory_id']=$inf->subCategory_id;
                $data['category_id']=$inf->category_id;
				$data['mrp']=$inf->mrp;
				$data['count_rate']=$inf->count_rate;
                $data['l_dealer_rate']=$inf->l_dealer_rate;
				$data['s_dealer_rate']=$inf->s_dealer_rate;
				$data['opening_qty']=$inf->opening_qty;
				$data['tax_percent']=$inf->tax_percent;
				$data['min_order_lvl']=$inf->min_order_lvl;
				$data['re_order_lvl']=$inf->re_order_lvl;
				$data['max_order_lvl']=$inf->max_order_lvl;
				$data['location']=$inf->location;
				$data['discount_cat']=$inf->discount_cat;
				$data['purchase_rate']=$inf->purchase_rate;
				$data['hsn_code']=$inf->hsn_code;
				$data['sk_item_id']=$inf->sk_item_id;
				$data['part_no']=$inf->part_no;
				$data['item_name']=$inf->item_name;
			}
			$this->load->view('admin/items/item-edit',$data);
		}
		else if($operation=='delete') {
			$dataArray = array(
                "item_status"=>0
			);
			$this->im->Update('mst_item','sk_item_id',$item_id,$dataArray);
			redirect('item/itemsdetails');
		}
		else if($operation=='active') {
			$dataArray = array(
					"item_status"=>1
			);
            $this->im->Update('mst_item','sk_item_id',$item_id,$dataArray);
			redirect('item/itemsdetails');
		}
		else if($operation=='update') {
			$id=base64_decode($this->uri->segment(4));
            $part_no=$this->input->post('part_no');
            $where=array('part_no'=>$part_no);
            $existing_item=$this->im->getRecords($where,'mst_item');
            if($existing_item==''){
            $dataArray=array(
            'category_id' => $this->input->post('category'),
            'subCategory_id' => $this->input->post('subcategory'),
            'part_no' => $part_no,
            'item_name' => $this->input->post('item_name'),
            'mrp' => $this->input->post('mrp'),
            'count_rate' => $this->input->post('count_rate'),
            'l_dealer_rate' => $this->input->post('l_dealer'),
            's_dealer_rate' => $this->input->post('s_dealer'),
            'opening_qty' => $this->input->post('open_qty'),
            'tax_percent' => $this->input->post('tax'),
            'min_order_lvl' => $this->input->post('min_order'),
            're_order_lvl' => $this->input->post('re_order'),
            'max_order_lvl' => $this->input->post('max_order'),
            'location' => $this->input->post('location'),
            'discount_cat' => $this->input->post('discount'),
            'purchase_rate' => $this->input->post('purchase_rate'),
            'hsn_code' => $this->input->post('hsn'),
            'item_status'=>1
            );
           
						
			$this->im->Update('mst_item','sk_item_id',$id,$dataArray);
			redirect('item/itemsdetails');
		}
        else{
            redirect('item/itemsdetails');

        }
    }
	}
    public function add_items(){
        $data=$this->common->check_session();
        $this->load->view('admin/items/add_items',$data);
    }

    public function checkpartno(){
        $data=$this->common->check_session();
        $part_details='';
        $part_no=$this->input->post('part_no');
        $where=array('part_no'=>$part_no);
        $part_details=$this->im->getRecords($where,'mst_item');
       // var_dump($part_details);
        $output='';
        if($part_details!=false){
           echo $output.="Part no is existed";
        }
        else{
            echo $output;
        }
        
    }


        /******************************************Items************************/


    }
?>