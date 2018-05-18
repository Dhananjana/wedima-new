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
            $price=$row->price;

        }

        $this->db->select('*');
        $this->db->where('id',$vendor_id);
        $query=$this->db->get('allvendor');
        foreach ($query->result() as $row)
        {
            $name= $row->vendorName;


        }

        $this->db->where('user_id',$user_id);
        $query=$this->db->get('cart1');
        if($query->num_rows()>0){
            foreach ($query->result() as $row)
            {
                $current= $row->current_total;
                $initial=$row->initial_ammount;


            }
            if($initial!='0') {
                $current = $current + $price;
                $data = array(
                    'current_total' => $current,
                );
                $this->db->where('user_id', $user_id);
                $this->db->update('cart1', $data);
            }

            else{
                $current = $current + $price;
                $data = array(
                    'current_total' => $current,
                );
                $this->db->where('user_id', $user_id);
                $this->db->update('cart1', $data);
            }

        }

        else{
            $data=array(
                'user_id'=>$user_id,
            );

            $this->db->insert('cart1',$data);
            $insertId = $this->db->insert_id();
            $this->db->where('user_id',$user_id);
            $query=$this->db->get('cart1');
            if($query->num_rows()>0) {
                foreach ($query->result() as $row) {
                    $current = $row->current_total;
                }
                $current = $current + $price;
                $data = array(
                    'current_total' => $current,
                );
                $this->db->where('id', $insertId);
                $this->db->update('cart1', $data);
            }
        }

        $data=array(
            'package_id'=>$this->input->post('id'),
            'date'=>$this->input->post('date'),
            'time'=>$this->input->post('time'),
            'vendor_name'=>$name,
            'package_name'=>$title,
            'price'=>$price,
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
        $this->db->where('brought','no');
        $query=$this->db->get('cart');
        return $query->result();
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
            foreach ($query->result() as $row) {
                $initial=$row->initial_ammount;
            }
            if($initial!=0) {
                return "yes";
            }
            else{
                return 'no';
            }
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

    public function total(){
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
        if($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                $current = $row->current_total;
                $initial=$row->initial_ammount;
            }
            if($initial!='0') {

                if ($current > $initial) {
                    return 'yes';
                } else {
                    return 'no';
                }
            }

            else{
                return 'no';
            }
        }

        else{
            return 'no';
        }
    }

    public function get_total(){
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
        if($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                $current = $row->current_total;
            }


                return $current;

        }

        else{
            return '0';
        }
    }

    public function book(){
        $username=$this->session->userdata('username');
        $this->db->select('id');
        $this->db->where('email',$username);
        $query=$this->db->get('user');
        foreach ($query->result() as $row)
        {
            $user_id= $row->id;

        }

        $this->db->where('user_id',$user_id);
        $this->db->where('confremation','no');
        $query=$this->db->get('cart');
        if($query->num_rows()>0) {
            return 'no';

        }

        else{
            return 'yes';
        }
    }

    public function bookconfirm(){
        $username=$this->session->userdata('username');
        $this->db->select('id');
        $this->db->where('email',$username);
        $query=$this->db->get('user');
        foreach ($query->result() as $row)
        {
            $user_id= $row->id;

        }

        $data=array(
            'brought'=>'yes'
        );
        $this->db->where('user_id',$user_id);
        $this->db->update('cart',$data);

    }
}