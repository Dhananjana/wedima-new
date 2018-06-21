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
        } else{
            $this->db->select('*');
            $this->db->where('name', $name);
            $this->db->like('serviceArea', $location ,'both');
            $this->db->from($tableName);
            $query = $this->db->get();
        }
        return $query->result();

    }

    function searchByPrice($fromvalue, $tovalue, $vendorName){
        $this->db->select('*');
        $this->db->from('allvendor');
        $this->db->where('vendorName',$vendorName);
        $vid = $this->db->get();
        $vid1 = $vid->result();
        foreach($vid1 as $res){
            $vendorID = $res->id;
        }
        $this->db->select('*');
        $this->db->from('package');
        $this->db->where('allvendorId',$vendorID);
        $p1 = $this->db->get();
        $p2 = $p1->result();
        foreach($p2 as $res1){
            $packTable = $res1->packageType;
            $this->db->select('*');
            $this->db->from($packTable);
            $val1 = $this->db->get();
            $val2 = $val1->result();
            foreach($val2 as $res2){
                $valu1 = $res2->price;
                if ($valu1>$fromvalue && $valu1<$tovalue){
                    return True;
                }else{
                    return False;
                }
            }
        }

    }
    function withoutName($tableName,$location){
        $this->db->select('*');
        $this->db->from($tableName);
        $this->db->like('serviceArea', $location ,'both');
        $query = $this->db->get();
        return $query->result();
    }
    function onlyCategory($tableName){
        $this->db->select('*');
        $this->db->from($tableName);
        $query = $this->db->get();
        return $query->result();
    }
    function onlyLocation($location){
        $this->db->select('vendorType');
        $this->db->from('vendor');
        $query = $this->db->get();
        $resutl = $query->result();
        $i = 0;
        foreach($resutl as $row){
            $tableName = $row->vendorType;
            $this->db->select('*');
            $this->db->from($tableName);
            $this->db->like('serviceArea', $location ,'both');
            $query = $this->db->get();
            if($query->num_rows()>0){
            	foreach($query->result() as $rows){
            		$data[] = $rows;
				}
			}
            //there was an issue only search and give only one table.
        }
		return $data;
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

    public function get_packages(){
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
            $allvendor_id=$row->id;

        }

        $this->db->select('title,id,description,price');
        $this->db->where('allvendorid',$allvendor_id);
        $query=$this->db->get('packages');
        return $query->result();
    }


        public function delete_packages($id){
            $this->db->where('id',$id);
            $this->db->delete('packages');
        }
 



        public function vendor_gallery(){
             $username=$this->session->userdata('username');
        $this->db->select('id');
        $this->db->where('email',$username);
        $query=$this->db->get('user');
        foreach ($query->result() as $row)
        {
            $user_id= $row->id;

        }
        $this->db->select('id,imageName,folder');
        $this->db->where('vendorId',$user_id);
        $query=$this->db->get('gallery');
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

    public function  remove($file){
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

        $this->db->set('pp', 'null');
        $this->db->where('name',$name);
        $this->db->update($table);
        return;
    }

    public function  removeC($file){
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

        $this->db->set('cover', 'null');
        $this->db->where('name',$name);
        $this->db->update($table);
        return;
    }


    public function view_profile($Name){
        $this->db->select('vendorTypeID');
        $this->db->where('vendorName',$Name);
        $query=$this->db->get('allvendor');
        foreach ($query->result() as $row)
        {
            $category=$row->vendorTypeID;
        }

        $this->db->select('vendorType');
        $this->db->where('id',$category);
        $query=$this->db->get('vendor');
        foreach ($query->result() as $row)
        {
            $table= $row->vendorType;
        }


        $this->db->where('name',$Name);
        $query=$this->db->get($table);
        return $query->result();

    }

    // public function pacakge1($Name){
    //     $this->db->select('*');
    //     $this->db->where('vendorName',$Name);
    //     $query=$this->db->get('allvendor');
    //     foreach ($query->result() as $row)
    //     {
    //         $allvendor_id=$row->id;

    //     }

    //     $this->db->select('*');
    //     $this->db->where('allvendorid',$allvendor_id);
    //     $query=$this->db->get('package1');
    //     return $query->result();
    // }

    
    
    public function get_by_id($id)
    {
        $this->db->from('packages');
        $this->db->where('id',$id);
        $query = $this->db->get();
 
        return $query->row();
    }

    public function mobile_update($where, $data)
    {
        $this->db->update('packages', $data, $where);
        return $this->db->affected_rows();
    }















 public function get_by_id_details()
    {

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


        $this->db->from($table);
        $this->db->where('name',$name);
        $query = $this->db->get();
 
        return $query->row();
    }

    public function mobile_updatedetail($where,$data)
    {
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
        $this->db->select('*');
        $this->db->where('id',$category);
        $query=$this->db->get('vendor');
        foreach ($query->result() as $row)
        {
            $table= $row->vendorType;
        }
    
        

        // $table=$this->db->query("SELECT vendorType as vnd FROM `vendor` WHERE id = $category")->row()->vnd;
        $this->db->update($table, $data, $where);
        return $this->db->affected_rows();
    }

    
    
    public function add_packages(){
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
            $id=$row->id;
        }

        $data=array(
            
            'description'=>$this->input->post('description'),
            'title' => $this->input->post('title'),
            'price'=>$this->input->post('price'),
            'allvendorid'=>$id,

         );

        $this->db->insert('packages',$data);

    }
    
    public function create_album(){
        $username=$this->session->userdata('username');
        $this->db->select('id');
        $this->db->where('email',$username);
        $query=$this->db->get('user');
        foreach ($query->result() as $row)
        {
            $user_id= $row->id;

        }


        $data=array(
            'album_name' => $this->input->post('Album_Name'), 
            'user_id' => $user_id, 

            );
        $this->db->insert('album',$data);
        $insertId = $this->db->insert_id();
        return $insertId;
    }

     public function get_albums(){
         $username=$this->session->userdata('username');
         $this->db->select('id');
         $this->db->where('email',$username);
         $query=$this->db->get('user');
         foreach ($query->result() as $row)
         {
             $user_id= $row->id;

         }

         $this->db->select('*');
         $this->db->where('album.user_id',$user_id);
         $this->db->from('album_images');
         $this->db->join('album', 'album_images.album_id=album.id');
         $this->db->group_by('album_name');
         $query = $this->db->get();
         return $query->result();

        
     }

     public function get_user(){
         $username=$this->session->userdata('username');
         $this->db->select('id');
         $this->db->where('email',$username);
         $query=$this->db->get('user');
         foreach ($query->result() as $row)
         {
             $user_id= $row->id;

         }
         return $user_id;
     }

     public function insert_img($data){
         $this->db->insert('album_images',$data);
     }

    public function get_vendor_name(){
        if($this->session->userdata('utype')=='vendor') {
            $username = $this->session->userdata('username');
            $this->db->select('id');
            $this->db->where('email', $username);
            $query = $this->db->get('user');
            if ($query->result() != null) {
                foreach ($query->result() as $row) {
                    $user_id = $row->id;

                }

                $this->db->select('*');
                $this->db->where('user_id', $user_id);
                $query = $this->db->get('allvendor');
                foreach ($query->result() as $row) {
                    $name = $row->vendorName;
                }
                return $name;
            } else {
                return null;
            }
        }
        else{
            return null;
        }
    }

    public function  get_album_details($Name){
        $this->db->select('id');
        $this->db->where('vendorName',$Name);
        $query=$this->db->get('allvendor');
        foreach ($query->result() as $row)
        {
            $id=$row->id;
        }

        $this->db->select('*');
        $this->db->where('album.allvendorid',$id);
        $this->db->from('album');
        $this->db->join('album_images', 'album.id = album_images.album_id');
        $this->db->group_by('album_name');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_gallery($Name){
        $this->db->select('*');
        $this->db->where('vendorName',$Name);
        $query=$this->db->get('allvendor');
        foreach ($query->result() as $row)
        {
            $user_id=$row->user_id;
        }

        $this->db->select('id,imageName,folder');
        $this->db->where('vendorId',$user_id);
        $query=$this->db->get('gallery');
        return $query->result();
    }


    public function bookmark($name){
        $username=$this->session->userdata('username');
        $this->db->select('id');
        $this->db->where('email',$username);
        $query=$this->db->get('user');
        foreach ($query->result() as $row)
        {
            $user_id= $row->id;

        }

        $this->db->select('*');
        $this->db->where('vendorName',$name);
        $query=$this->db->get('allvendor');
        foreach ($query->result() as $row)
        {
            $allvendorid=$row->id;
            $vendor_name=$row->vendorName;
            $category=$row->vendorTypeID;
        }

        $this->db->select('vendorType');
        $this->db->where('id',$category);
        $query=$this->db->get('vendor');
        foreach ($query->result() as $row)
        {
            $table= $row->vendorType;
        }

        $data=array(
            'allvendorid'=> $allvendorid,
            'user_id'=>$user_id,
            'vendor_name'=>$vendor_name,
            'category'=>$table
        );

        $this->db->insert('bookmark',$data);
        return;



    }

    public function unbookmark($name){
        $username=$this->session->userdata('username');
        $this->db->select('id');
        $this->db->where('email',$username);
        $query=$this->db->get('user');
        foreach ($query->result() as $row)
        {
            $user_id= $row->id;

        }

        $this->db->select('*');
        $this->db->where('vendorName',$name);
        $query=$this->db->get('allvendor');
        foreach ($query->result() as $row)
        {
            $allvendorid=$row->id;
        }

        $this->db->where('allvendorid',$allvendorid);
        $this->db->where('user_id',$user_id);
        $this->db->delete('bookmark');
        return;



    }

    public function pacakges($Name){
        $this->db->select('*');
        $this->db->where('vendorName',$Name);
        $query=$this->db->get('allvendor');
        foreach ($query->result() as $row)
        {
            $allvendor_id=$row->id;

        }

        $this->db->select('*');
        $this->db->where('allvendorid',$allvendor_id);
        $query=$this->db->get('packages');
        return $query->result();
    }


    public function  bookmarkload($name){
        if($this->session->userdata('logged')==1) {
            $username = $this->session->userdata('username');
            $this->db->select('id');
            $this->db->where('email', $username);
            $query = $this->db->get('user');
            foreach ($query->result() as $row) {
                $user_id = $row->id;

            }

            $this->db->select('*');
            $this->db->where('vendorName', $name);
            $query = $this->db->get('allvendor');
            foreach ($query->result() as $row) {
                $allvendorid = $row->id;
                $vendor_name = $row->vendorName;
            }

            $this->db->select('id');
            $this->db->where('allvendorid', $allvendorid);
            $this->db->where('user_id', $user_id);
            $query = $this->db->get('bookmark');
            if ($query->num_rows() > 0) {
                return 'yes';
            } else {
                return 'no';
            }
        }

        else {
            return 'no';
        }


    }

    public function get_feedbacks(){
        $username=$this->session->userdata('username');
        $this->db->select('id');
        $this->db->where('email',$username);
        $query=$this->db->get('user');
        foreach ($query->result() as $row)
        {
            $user_id= $row->id;

        }

        $this->db->select('*');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('allvendor');
        foreach ($query->result() as $row) {
            $vendor_id = $row->id;
        }

        $this->db->select('*');
        $this->db->where('vendor_id',$vendor_id);
        $query=$this->db->get('feedback');
        return $query->result();
    }
}
?>
