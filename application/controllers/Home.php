<?php
/**
 * Created by PhpStorm.
 * User: thari
 * Date: 2018-03-28
 * Time: PM 1.56
 */

class home extends CI_Controller
{
    public  function index(){
        $data1['nav1'] = $this->load->view('templates/header1',NULL,TRUE);
        $data1['sli'] = $this->load->view('slider',NULL,TRUE);
        $this->load->view('templates/header');
        $this->load->view('home',$data1);
        $this->load->view('templates/footer');
    }
}