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
}