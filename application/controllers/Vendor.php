<?php

class Vendor extends CI_Controller
{
    private $upload_path ="./uploads/profile";
    private $upload_path1 ="./uploads/cover";
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Vendor_model');
        $this->load->model('Home_model');
    }

    public function index(){
        $data['details']=$this->Vendor_model->get_details();
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
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name'];
            $this->Vendor_model->ppUp($file_name);

        }
    }

    public function remove(){
        $file =$this->input->post("file");
        if($file && file_exists($this->upload_path."/".$file)){
            unlink($this->upload_path."/".$file);
        }
    }


    public function coverUp(){
        if(! empty($_FILES)){
            $config["upload_path"]= $this->upload_path1;
            $config["allowed_types"]="gif|png|jpg";
            $this->load->library('upload',$config);
            $this->upload->do_upload("file");
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name'];
            $this->Vendor_model->coverUp($file_name);

        }
    }

    public function Cremove(){
        $file =$this->input->post("file");
        if($file && file_exists($this->upload_path1."/".$file)){
            unlink($this->upload_path1."/".$file);
        }
    }

    public function profileView(){
        $name= $this->uri->segment(3);
        $Name=urldecode($name);
        $data['details']=$this->Vendor_model->view_profile($Name);
        $this->load->view('templates/header');
        $this->load->view('profileView',$data);
        $this->load->view('templates/footer');

    }


}