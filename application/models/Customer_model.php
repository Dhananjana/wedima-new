<?php
/**
 * Created by PhpStorm.
 * User: thari
 * Date: 2018-05-12
 * Time: AM 5.48
 */

class Customer_model extends CI_Model
{
    public function get_bookmarks(){
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
        $this->db->from('bookmark');
        $query = $this->db->get();
        return $query->result();

    }
}