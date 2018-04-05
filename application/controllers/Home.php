<?php
/**
 * Created by PhpStorm.
 * User: thari
 * Date: 2018-03-28
 * Time: PM 1.56
 */

class home extends CI_Controller
{
    public function __construct()
    {
      parent::__construct();
      $this->load->model('Vendor_model');
    }
    public  function index(){
        $data1['nav1'] = $this->load->view('templates/header1',NULL,TRUE);
        $data1['sli'] = $this->load->view('slider',NULL,TRUE);
            $this->load->view('templates/header');
            $this->load->view('home', $data1);
            $this->load->view('templates/footer');

//        if(($this->session->userdata('logged')==1)&& ($this->session->userdata('utype')=='vendor')){
//            $this->load->view('templates/vheader');
//            $this->load->view('home',$data1);
//            $this->load->view('templates/footer');
//        }
//
//        if(($this->session->userdata('logged')==1)&& ($this->session->userdata('utype')=='customer')){
//            $this->load->view('templates/header');
//            $this->load->view('home',$data1);
//            $this->load->view('templates/footer');
//        }


    }
    public function lookup(){  
      
        // process posted form data  
        $keyword = $this->input->post('term');
        $data['response'] = 'false'; //Set default response  
        $query = $this->Vendor_model->lookup($keyword); //Search DB  
        if( ! empty($query) )  
        {  
            $data['response'] = 'true'; //Set response  
            $data['message'] = array(); //Create array  
            foreach( $query as $row )  
            {  
                $data['message'][] = array(   
                                        'id'=>$row->id,  
                                        'value' => $row->vendorName,  
                                        '' 
                                     );  //Add a row to array  
            }  
        }  
        if('IS_AJAX')  
        {  
            echo json_encode($data); //echo json string if ajax request  
        }  
        else 
        {  
            $this->load->view('home',$data); //Load html view of search results  
        }  
    }

    function finalResult(){
        $tableName = $this->input->post('cat');
        $location = $this->input->post('loc');
        $name = $this->input->post('vendorName');
        // $tableName = 'select';
        // $location = 'gampaha';
        // $name = 'Salon Bhagya ';
        $data1['sres'] = $this->Vendor_model->finalResult($tableName,$location,$name);
       // var_dump($data);
         //$this->load->model('Vendor_model');
        $data1['nav1'] = $this->load->view('templates/header1',NULL,TRUE);
        $data1['sli'] = $this->load->view('slider',NULL,TRUE);
        if($this->session->userdata('logged')==0){
            $this->load->view('templates/header');
            $this->load->view('searchPage', $data1);
            $this->load->view('templates/footer');
    }
        if(($this->session->userdata('logged')==1)&& ($this->session->userdata('utype')=='vendor')){
            $this->load->view('templates/vheader');
            $this->load->view('searchPage',$data1);
            $this->load->view('templates/footer');
        }

        if(($this->session->userdata('logged')==1)&& ($this->session->userdata('utype')=='customer')){
            $this->load->view('templates/header');
            $this->load->view('searchPage',$data1);
            $this->load->view('templates/footer');
        }
     }
}
