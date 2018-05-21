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
        return $query->result();
    }
    function customer(){
        $this->db->select('*');
        $this->db->where('usertype', 'customer');
        $query = $this->db->get('user');
        return $query->result();
    }

}
