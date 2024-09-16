<?php
class Common {
	public function __construct() {
		$this->CI =& get_instance();
		$this->CI->load->library("session");
		$this->CI->load->library('email');
		//$this->CI->load->model('signin/signinmodel');
	}
function callAPI($method, $url, $data, $headers = false) {
	$curl = curl_init();
	 
	switch ($method) {
		case "POST":
			curl_setopt($curl, CURLOPT_POST, 1);
			if ($data) {
				curl_setopt($curl, CURLOPT_POSTFIELDS, $data); }
				break;
		case "PUT":
			curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
			if ($data)
				curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
			break;
		default:
			if ($data)
				$url = sprintf("%s?%s", $url, http_build_query($data));
	}

	// OPTIONS:
	curl_setopt($curl, CURLOPT_URL, $url);
	if(!$headers){
		curl_setopt($curl, CURLOPT_HTTPHEADER, array(
		'APIKEY: 111111111111111111111',
		'Content-Type: application/json',
		));
	}else{
		curl_setopt($curl, CURLOPT_HTTPHEADER,$headers );
	}
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);

	// EXECUTE:
	$result = curl_exec($curl);
	if(!$result){die("Connection Failure");}
	curl_close($curl);
	//print_r("++++".$data);
	return $result;
}
public function check_session(){
	if($this->CI->session->userdata('Roll_Id')==''){
		redirect("admin/");
	}
	$data=array();
	date_default_timezone_set('Asia/Kolkata');
	$post_date = date('Y-m-d');
	$timestamp = date("Y-m-d H:i:s");
	$data["post_date"] = $post_date;
	$data["timestamp"] = $timestamp;
	$data['userAccessToken']=$this->CI->session->userdata('userAccessToken');
	$data['Roll_Id']=$this->CI->session->userdata('Roll_Id');
	$data['Roll_name']=$this->CI->session->userdata('Roll_name');
	$data['organization_id']=$this->CI->session->userdata('Organization_id');
	return $data;
}
}
?>