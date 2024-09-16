<?php if (!defined('BASEPATH'))exit('No direct script access allowed');

class ItemsModel extends CI_Model{
   
    public function __construct() 
	{
		parent::__construct();
	}
	
	public function getRecords($where,$table) {
		$this->db->select("*"); 
		$query = $this->db->get_where($table, $where);
		if ($query->num_rows() > 0) {
			return $query->result();
		}
		else {
			return false;
		}
	}
    function getCategory($table)
	{
		$query=$this->db->query("select * from $table");
		$result = $query->result();
		return $result;
	}
    function Save($data,$table)
	{
		$this->db->insert($table,$data);
		return $this->db->insert_id();
	} 
    
	function getItemDetailsById($table,$sk_category_id)
	{
			$query=$this->db->query("select * from $table where sk_category_id='$sk_category_id'");
			$result = $query->result();
			return $result;
    }
    function Update($table,$cond,$email,$data)
	{
		$this->db->where($cond,$email);
		$this->db->update($table,$data);
	} 

    function getSubCategory($table){
        $query=$this->db->query("select sk_subCategory_id,subCategoryName,categoryName,sk_category_id,subCategoryStatus	from $table join mst_category on category_id=sk_category_id");
        $result = $query->result();
        return $result;
    }
    function getsubcategoryById($table,$sk_category_id)
	{
			$query=$this->db->query("select * from $table where sk_subCategory_id='$sk_category_id'");
			$result = $query->result();
			return $result;
    }
    function getItemDetails($table){
        $query=$this->db->query("select sk_item_id, sk_subCategory_id,part_no,item_name,mrp,count_rate,l_dealer_rate,s_dealer_rate,opening_qty,tax_percent,min_order_lvl,re_order_lvl,max_order_lvl,location,discount_cat,purchase_rate,hsn_code,subCategoryName,categoryName,sk_category_id,item_status,subCategoryStatus from $table join mst_category on category_id=sk_category_id join mst_subcategory on subCategory_id=sk_subCategory_id");
        $result = $query->result();
        return $result;
    }
    function getsubcategorybycat($category_id)
	{
		$query=$this->db->query("select * from mst_subcategory where category_id='$category_id'");
		$result = $query->result();
		return $result;
	}
    function getitemsbyid($table,$item_id)
	{
			$query=$this->db->query("select * from $table where sk_item_id='$item_id'");
			$result = $query->result();
			return $result;
    }
}
?>