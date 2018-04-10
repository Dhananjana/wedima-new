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
        if($location=='Island_wide'){
           $this->db->select('*');
           $this->db->where('name', $name);
           $this->db->from($tableName);
           $query = $this->db->get();
         } 
         $this->db->select('*');
        $this->db->where('name', $name);
        $this->db->like('serviceArea', $location ,'both');
        $this->db->from($tableName);
        $query = $this->db->get();

         return $query->result();  
        
    }

    public function get_details(){
        $username=$this->session->userdata('username');
        $this->db->select('id');
        $this->db->where('email',$username);
        $query=$this->db->get('user');
        foreach ($query->result() as $row)
        {
            $user_id= $row->id;

        }

        $this->db->select('*');
        $this->db->where('user_id',$user_id);
        $query=$this->db->get('allvendor');
        foreach ($query->result() as $row)
        {
            $category=$row->vendorTypeID;
            $name= $row->vendorName;


        }

        $this->db->select('vendorType');
        $this->db->where('id',$category);
        $query=$this->db->get('vendor');
        foreach ($query->result() as $row)
        {
            $table= $row->vendorType;
        }

        $this->db->where('name',$name);
        $query=$this->db->get($table);
        return $query->result();
    }

    public function  ppUp($file_name){
        $username=$this->session->userdata('username');
        $this->db->select('id');
        $this->db->where('email',$username);
        $query=$this->db->get('user');
        foreach ($query->result() as $row)
        {
            $user_id= $row->id;

        }

        $this->db->select('*');
        $this->db->where('user_id',$user_id);
        $query=$this->db->get('allvendor');
        foreach ($query->result() as $row)
        {
            $category=$row->vendorTypeID;
            $name= $row->vendorName;


        }

        $this->db->select('vendorType');
        $this->db->where('id',$category);
        $query=$this->db->get('vendor');
        foreach ($query->result() as $row)
        {
            $table= $row->vendorType;
        }

        $this->db->set('pp', $file_name);
        $this->db->where('name',$name);
        $this->db->update($table);
        return;
    }

    public function  coverUp($file_name){
        $username=$this->session->userdata('username');
        $this->db->select('id');
        $this->db->where('email',$username);
        $query=$this->db->get('user');
        foreach ($query->result() as $row)
        {
            $user_id= $row->id;

        }

        $this->db->select('*');
        $this->db->where('user_id',$user_id);
        $query=$this->db->get('allvendor');
        foreach ($query->result() as $row)
        {
            $category=$row->vendorTypeID;
            $name= $row->vendorName;


        }

        $this->db->select('vendorType');
        $this->db->where('id',$category);
        $query=$this->db->get('vendor');
        foreach ($query->result() as $row)
        {
            $table= $row->vendorType;
        }

        $this->db->set('cover', $file_name);
        $this->db->where('name',$name);
        $this->db->update($table);
        return;
    }
}
?>