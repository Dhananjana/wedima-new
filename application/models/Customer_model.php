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

    public function addcart(){
        $username=$this->session->userdata('username');
        $this->db->select('id');
        $this->db->where('email',$username);
        $query=$this->db->get('user');
        foreach ($query->result() as $row)
        {
            $user_id= $row->id;

        }
        $package_id=$this->input->post('id');
        $this->db->select('*');
        $this->db->where('id',$package_id);
        $query=$this->db->get('packages');
        foreach ($query->result() as $row)
        {
            $vendor_id= $row->allvendorid;
            $title=$row->title;

        }

        $this->db->select('*');
        $this->db->where('id',$vendor_id);
        $query=$this->db->get('allvendor');
        foreach ($query->result() as $row)
        {
            $name= $row->vendorName;


        }

        $data=array(
            'package_id'=>$this->input->post('id'),
            'date'=>$this->input->post('date'),
            'time'=>$this->input->post('time'),
            'vendor_name'=>$name,
            'package_name'=>$title,
            'user_id'=>$user_id
        );

        $this->db->insert('cart',$data);

    }

    public function get_cart_itemes(){
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
        $query=$this->db->get('cart');
    }

    public function get_initial_value(){
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
        $query=$this->db->get('cart1');

        if($query->num_rows()>0){
            return "yes";
        }

        else{
            return "no";
        }
    }

    public function set_initial(){
        $username=$this->session->userdata('username');
        $this->db->select('id');
        $this->db->where('email',$username);
        $query=$this->db->get('user');
        foreach ($query->result() as $row)
        {
            $user_id= $row->id;

        }

        $data=array(
            'user_id'=>$user_id,
            'initial_ammount'=>$this->input->post('ammount')
        );

        $this->db->insert('cart1',$data);
    }

    public function get_initial_ammount(){
        $username=$this->session->userdata('username');
        $this->db->select('id');
        $this->db->where('email',$username);
        $query=$this->db->get('user');
        foreach ($query->result() as $row)
        {
            $user_id= $row->id;

        }

        $this->db->where('user_id',$user_id);
        $query=$this->db->get('cart1');
        return $query->result();
    }
}