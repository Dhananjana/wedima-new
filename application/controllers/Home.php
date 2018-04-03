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
        if($this->session->userdata('logged')==0){
            $this->load->view('templates/header');
            $this->load->view('home', $data1);
            $this->load->view('templates/footer');
    }
        if(($this->session->userdata('logged')==1)&& ($this->session->userdata('utype')=='vendor')){
            $this->load->view('templates/vheader');
            $this->load->view('home',$data1);
            $this->load->view('templates/footer');
        }

        if(($this->session->userdata('logged')==1)&& ($this->session->userdata('utype')=='customer')){
            $this->load->view('templates/header');
            $this->load->view('home',$data1);
            $this->load->view('templates/footer');
        }


    }
    public function hsearch(){
      $search=  $this->input->post('search');
      // $search = "Nishi   ";
      $this->load->model('Vendor_model');
      $query = $this->Vendor_model->hsearch($search);
      echo json_encode ($query);
      
      //var_dump($query);
     }
}