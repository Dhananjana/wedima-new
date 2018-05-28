<?php
class Admin_model extends CI_Model{
    function register($data){
        $this->db->insert('admin',$data);
    }
    function checkMail(){
        $this->db->select('email');
        $query = $this->db->get('admin');
        return $query;
    }
    function allvendor(){
        $this->db->select('*');
        $query = $this->db->get('allvendor');
        $response = $query->result_array();
        return $response;
    }
    function customer(){
        $this->db->select('*');
        $this->db->where('usertype', 'customer');
        $query = $this->db->get('user');
        return $query->result();
    }

    function vendorR($vendorTypeID){
        $this->db->select('vendorType');
        $this->db->where('id',$vendorTypeID);
        $query = $this->db->get('vendor');
        return $query->result();
    }
    function ProfileImage($vendorType, $vendorName){
        $this->db->select('*');
        $this->db->where('name',$vendorName);
        $query = $this->db->get($vendorType);
        return $query->result();
    }

    function selectEmail($userID){
        $this->db->select('*');
        $this->db->where('id',$userID);
        $query = $this->db->get('user');
        return $query->result();
    }

}
