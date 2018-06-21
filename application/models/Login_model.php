<?php
/**
 * Created by PhpStorm.
 * User: thari
 * Date: 2018-03-30
 * Time: AM 10.17
 */

class Login_model extends CI_Model
{
    function can_login($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('user');//check whether the user name and password exist.

        if($query->num_rows()>0){
            return $query->row_array();
        }
        else{
            return NULL;
        }
    }


    function  register_customer(){
        $data=array(
            'name' => $this->input->post('name'),
            'password'=>$this->input->post('password'),
            'email'=>$this->input->post('email'),
            'usertype'=>'customer'

        );
        $this->db->insert('user',$data);
    }

    function  register_vendor(){
        $data=array(
            'name' => $this->input->post('name'),
            'password'=>$this->input->post('password'),
            'email'=>$this->input->post('email'),
            'usertype'=>'vendor'
        );

        $this->db->insert('user',$data);
        $user_id =$this->db->insert_id();


        $category =$this->input->post('category');

        $this->db->select('*');
        $this->db->where('id',$category);
        $query=$this->db->get('vendor');
        foreach ($query->result() as $row)
        {
            $table=$row->vendorType;
            $vendorTypeID=$row->id;
        }

        $data1=array(
            'vendorName' => $this->input->post('company'),
            'vendorTypeID' => $vendorTypeID,
            'user_id' => $user_id
        );

        $this->db->insert('allvendor',$data1);
        $allvendor_id =$this->db->insert_id();

        $data2=array(
            'name' => $this->input->post('company'),
            'serviceArea' => $this->input->post('service'),
        );

        $this->db->insert($table,$data2);

    }
}