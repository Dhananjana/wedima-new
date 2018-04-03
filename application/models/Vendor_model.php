<?php

class Vendor_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
 
	function lookup($keyword){ 
        $this->db->select('*')->from('allvendor'); 
        $this->db->like('vendorName',$keyword,'both'); 
        //$this->db->or_like('iso',$keyword,'after'); 
        $query = $this->db->get();     
        return $query->result(); 
    } 
}
?>