<?php

class Vendor extends CI_Controller
{
    private $upload_path ="./uploads";
    public function index(){
        $data['nav1']=$this->load->view('templates/header1', NULL, TRUE);
        $this->load->view('templates/header');
        $this->load->view('vendor/profile',$data);
        $this->load->view('templates/footer');
    }

    public function ppUp(){
        if(! empty($_FILES)){
            $config["upload_path"]= $this->upload_path;
            $config["allowed_types"]="gif|png|jpg";
            $this->load->library('upload',$config);
            $this->upload->do_upload("file");
        }
    }

    public function remove(){
        $file =$this->input->post("file");
        if($file && file_exists($this->upload_path."/".$file)){
            unlink($this->upload_path."/".$file);
        }
    }
    
}