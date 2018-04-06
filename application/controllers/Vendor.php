<?php

class Vendor extends CI_Controller
{
    public function index(){
        $data['nav1']=$this->load->view('templates/header1', NULL, TRUE);
        $this->load->view('templates/header');
        $this->load->view('vendor/profile',$data);
        $this->load->view('templates/footer');
    }
    
}