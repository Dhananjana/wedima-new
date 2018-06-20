<?php
/**
 * Created by PhpStorm.
 * User: thari
 * Date: 2018-05-12
 * Time: AM 5.44
 */
class Home extends CI_Controller{
    public function __construct()
    {
      parent::__construct();
      $this->load->model('Vendor_model');
        $this->load->model('Home_model');
        $this->load->library("pagination");
    }
    public  function index(){
        $data1['testinominals']=$this->Home_model->get_testinominals();
        $data1['images']=$this->Home_model->get_images();
        $data1['nav1'] = $this->load->view('templates/header1',NULL,TRUE);
        $data1['sli'] = $this->load->view('slider',NULL,TRUE);

            $this->load->view('templates/header');
            $this->load->view('home', $data1);
            $this->load->view('templates/footer');
           
   }
   public function insert_to_db($name)
        {
        $Name=urldecode($name);
        $data1['vendor']=$this->Vendor_model->get_vendor_name();
        $this->Home_model->insert_to_db($Name);

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
        // $name = 'Salon Bha	gya ';

        if($name==''){
            if($tableName!='select'){
                if($location!='Island_wide'){
                    $data1['sres']=$this->Vendor_model->withoutName($tableName,$location);//name empty ... location and category not empty
                }
                else{
                    $data1['sres']=$this->Vendor_model->onlyCategory($tableName);//name, location empty.... category not empty
                }

            }else{
                $data1['sres']=$this->Vendor_model->onlyLocation($location);//name,category empty... location not empty

            }
        }else{
            $data1['sres'] = $this->Vendor_model->finalResult($tableName,$location,$name);
            // var_dump($data);
            //$this->load->model('Vendor_model');

        }
       $data1['nav1'] = $this->load->view('templates/header1',NULL,TRUE);
        $data1['sli'] = $this->load->view('slider',NULL,TRUE);

        $this->load->view('templates/header');
        $this->load->view('searchPage', $data1);
        $this->load->view('templates/footer');



    }
    function searchByPrice(){
        $fromvalue = 10000;
        $tovalue = 28000;
        $vendorName = 'Salon Bhagya';
        $data = $this->Vendor_model->searchByPrice($fromvalue, $tovalue, $vendorName);
        //foreach($data as)
    }

     public function vendorList(){
        $category= $this->uri->segment(3);
        $data["vendors"]=$this->Home_model->get_vendor_list($category);
         $this->load->view('templates/header');
         $this->load->view('vendorList', $data);
         $this->load->view('templates/footer');
     }

     public function allTestinominals(){
         $config = array();
         $config["base_url"] = base_url() . "home/allTestinominals";
         $total_row=$this->Home_model->record_count();
         $config["total_rows"] = $total_row;
         $config["per_page"] = 4;
         $config["uri_segment"] = 3;
         $config['full_tag_open'] = '<ul class="pagination">';
         $config['full_tag_close'] = '</ul>';
         $config['attributes'] = array('class' => 'page_link');
         $config['first_link'] = 'First';
         $config['last_link'] = 'Last';
         $config['first_tag_open'] = '<li>';
         $config['first_tag_close'] = '</li>';
         $config['prev_link'] = '&laquo';
         $config['prev_tag_open'] = '<li class="prev">';
         $config['prev_tag_close'] = '</li>';
         $config['next_link'] = '&raquo';
         $config['next_tag_open'] = '<li>';
         $config['next_tag_close'] = '</li>';
         $config['last_tag_open'] = '<li>';
         $config['last_tag_close'] = '</li>';
         $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
         $config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
         $config['num_tag_open'] = '<li>';
         $config['num_tag_close'] = '</li>';

         $this->pagination->initialize($config);

         $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
         $data["testinominals1"] = $this->Home_model->allTestinominals($config["per_page"], $page);
         $data["links"] = $this->pagination->create_links();


         $this->load->view('templates/header');
         $this->load->view('testinominals', $data);
         $this->load->view('templates/footer');

     }
     public function gallery(){
         $data['images']=$this->Home_model->gallery();
         $this->load->view('templates/header');
         $this->load->view('gallery',$data);
         $this->load->view('templates/footer');
     }
     public function albums($id){
        // var_dump($id);
        // return;
         $data['images']=$this->Home_model->album_images($id);
         $data['album_name']=$this->Home_model->get_album_name($id);
         $this->load->view('templates/header');
         $this->load->view('album_images',$data);
         $this->load->view('templates/footer');
     }

}
