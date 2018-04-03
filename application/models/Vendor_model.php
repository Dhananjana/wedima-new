<?php

class Vendor_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
 
	function hsearch($search){		
		$this->db->select('vendorName');
		$this->db->from('allvendor');
		//$whereCondition = array('vendorName' =>$search);
		//$this->db->where('vendorName',$search);
		$this->db->like('vendorName',$search,'both');
		$query = $this->db->get();
		return $query->result();
	}
}
?>