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
    function finalResult($tableName, $location, $name){
        $this->db->select('*');
        $this->db->where('name', $name);
        $this->db->like('serviceArea', $location ,'both');
        $this->db->from($tableName);
        $query = $this->db->get();
        return $query->result();
    } 
}
?>