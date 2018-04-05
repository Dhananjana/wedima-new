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
        if($tableName=='select'){
            $this->db->select('vendorTypeID');
            $this->db->from('allvendor');
            $this->db->where('vendorName',$name);
            $id = $this->db->get();
            $row = $id->result();    
            foreach($row as $res){
                $id1 = $res->vendorTypeID; 
            } 
            
            $this->db->select('vendorType');
            $this->db->from('vendor');
            $this->db->where('id',$id1);
            $tab = $this->db->get();
            $table = $tab->result();
            foreach($table as $result){
                $tableName = $result->vendorType;
            }
            echo $tableName;
        }
        if($location!='Island_wide'){
            $this->db->select('*');
            $this->db->where('name', $name);
            $this->db->like('serviceArea', $location ,'both');
            $this->db->from($tableName);
            $query = $this->db->get();
            
         }else{
           $this->db->select('*');
           $this->db->where('name', $name);
           $this->db->from($tableName);
           $query = $this->db->get();
           
         } 
         return $query->result();  
        
    } 
}
?>