<?php
/**
 * Created by PhpStorm.
 * User: thari
 * Date: 2018-03-29
 * Time: PM 7.36
 */

class Vendor extends CI_Controller
{
    public function index(){
        $data['nav1']=$this->load->view('templates/header1', NULL, TRUE);
        $this->load->view('templates/vheader');
        $this->load->view('vendor/profile',$data);
        $this->load->view('templates/footer');
    }
}