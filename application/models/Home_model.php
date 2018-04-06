<?php
/**
 * Created by PhpStorm.
 * User: thari
 * Date: 2018-04-06
 * Time: PM 12.32
 */

class Home_model extends CI_Model
{
    public function get_testinominals(){
        $this->db->order_by('id',"ASC");
        $this->db->limit(3);
        $query=$this->db->get('feedback');
        return $query->result();
    }
}