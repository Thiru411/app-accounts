<?php if (!defined('BASEPATH'))exit('No direct script access allowed');

class settingsModel extends CI_Model{
   
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

    function getSettings($table)
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
    function Update($table,$cond,$email,$data)
	{
		$this->db->where($cond,$email);
		$this->db->update($table,$data);
	} 
}
?>