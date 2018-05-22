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
        $this->db->order_by('id',"DESC");
        $this->db->limit(3);
        $query=$this->db->get('feedback');
        return $query->result();
    }

    public function get_images(){
        $this->db->order_by('id',"DESC");
        $this->db->limit(12);
        $query=$this->db->get('gallery');
        return $query->result();
    }

    public function get_vendor_list($category){
        if($category==1){
            $query=$this->db->get('locations');
            return $query->result();
        }

        if($category==2){
            $query=$this->db->get('bridalwear');
            return $query->result();
        }

        if($category==3){
            $query=$this->db->get('groomwear');
            return $query->result();
        }

        if($category==4){
            $query=$this->db->get('beautician');
            return $query->result();
        }

        if($category==5){
            $query=$this->db->get('jewellary');
            return $query->result();
        }

        if($category==6){
            $query=$this->db->get('	photographers');
            return $query->result();
        }

        if($category==7){
            $query=$this->db->get('	transporters');
            return $query->result();
        }

        if($category==8){
            $query=$this->db->get('weddingcake');
            return $query->result();
        }

        if($category==9){
            $query=$this->db->get('	stationary');
            return $query->result();
        }

        if($category==10){
            $query=$this->db->get('flowerworks');
            return $query->result();
        }

        if($category==11){
            $query=$this->db->get('traditionalteams');
            return $query->result();
        }

        if($category==12){
            $query=$this->db->get('entertainment');
            return $query->result();
        }
    }

    public function record_count(){
        return $this->db->count_all("feedback");
    }


    public function allTestinominals($limit, $start){
        $this->db->limit($limit, $start);
        $this->db->order_by("id", "desc");
        $query = $this->db->get("feedback");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }

    public function gallery(){
        $query=$this->db->get('gallery');
        return $query->result();
    }
    public function album_images($id){
         $username=$this->session->userdata('username');
         $this->db->select('id');
         $this->db->where('email',$username);
         $query=$this->db->get('user');
         foreach ($query->result() as $row)
         {
             $user_id= $row->id;

         }

         $this->db->select('*');
         $this->db->where('id',$id);
         $query=$this->db->get('album');
         foreach ($query->result() as $row)
         {
             $album_name= $row->album_name;

         }

         $this->db->select('*');
         $this->db->where('user_id',$user_id);
         $this->db->from('album_images');
         $query = $this->db->get();
         return $query->result();
    }
}