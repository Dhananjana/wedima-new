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
        if(($this->session->userdata('logged')==1) &($this->session->userdata('utype')=='vendor')) {
            $data['details'] = $this->Vendor_model->get_details();
            $data['nav1'] = $this->load->view('templates/header1', NULL, TRUE);
            $data['packages'] = $this->Vendor_model->get_packages();
            $data['images'] = $this->Vendor_model->vendor_gallery();

            $data['albums'] = $this->Vendor_model->get_albums();
            $this->load->view('templates/header');
            $this->load->view('vendor/profile', $data);
            $this->load->view('templates/footer');
        }

        else{
            redirect('login');
        }


    }
    public function ajax_edit($id)
    {
        $data = $this->Vendor_model->get_by_id($id);
        echo json_encode($data);
    }
    
    public function mobile_update()
    {
        $data = array(
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
                'price' => $this->input->post('price'),
            );
       
        $this->Vendor_model->mobile_update(array('id' => $this->input->post('id')), $data);
           echo json_encode(array("status" => TRUE));
    }

     public function ajax_edit_details()
    {
        $data = $this->Vendor_model->get_by_id_details();
        echo json_encode($data);
    }
    
    public function mobile_updatedetails()
    {
        $data = array(
               
                'description' =>  $this->input->post('description'),
                 'address' => $this->input->post('address'),
                'telephone' => $this->input->post('telephone'),
                 'serviceArea' => $this->input->post('serviceArea'),
            );

       
        $this->Vendor_model->mobile_updatedetail(array('id' => $this->input->post('id')), $data);
           echo json_encode(array("status" => TRUE));
    }

    //  public function ajax_edit1($id)
    // {
    //     $data = $this->Vendor_model->get_by_id1($id);
    //     echo json_encode($data);
    // }
    
    // public function mobile_update1()
    // {
    //     $data = array(
    //             'description' => $this->input->post('description'),
    //             'price' => $this->input->post('price'),
    //         );
       
    //     $this->Vendor_model->mobile_update1(array('id' => $this->input->post('id')), $data);
    //        echo json_encode(array("status" => TRUE));
       
        
    // }
    public function add_packages(){

        $this->Vendor_model->add_packages();

        echo json_encode(array("status" => TRUE));
    }
   
    public function delete_packages($id){

        $this->Vendor_model->delete_packages($id);
        echo json_encode(array("status" => TRUE));
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
        $data1['vendor']=$this->Vendor_model->get_vendor_name();
        if($data1['vendor']==$Name){
            redirect('vendor');
        }
        else {
            $data['isbookmark']=$this->Vendor_model->bookmarkload($Name);
            $data['details'] = $this->Vendor_model->view_profile($Name);
            $data['packages'] = $this->Vendor_model->pacakges($Name);
            $data['albums']=$this->Vendor_model->get_album_details($Name);
            $data['images']=$this->Vendor_model->get_gallery($Name);

            $this->load->view('templates/header');
            $this->load->view('profileView', $data);
            $this->load->view('templates/footer');
        }

    }
    public function create_album(){
        $json = array();

        $directory = FCPATH . 'albums/' . $this->input->get('Album_Name');

        if (is_dir($directory)) {
           mkdir($directory . '/' . $this->input->post('Album_Name'), 0777);
           $json['success'] = 'The folder ' . $this->input->post('Album_Name') . 'was created!';
        } else {
           $json['error'] = 'The folder ' . $this->input->post('Album_Name') . 'was not created!';
        }

        $this->output->set_content_type('Content-Type: application/json');
        $this->output->set_output(json_encode($json));
        $data1['id']=$this->Vendor_model->create_album();
        $data1['user']=$this->Vendor_model->get_user();
        $config["upload_path"]='albums/' . $this->input->post('Album_Name');
        $config["allowed_types"]="gif|png|jpg";
        $this->load->library('upload',$config);
        $this->upload->do_upload("image");
        $upload_data = $this->upload->data();
        $file_name = $upload_data['file_name'];
        var_dump($file_name);
        $data=array(
            'image_name'=>$file_name,
            'album_id'=>$data1['id'],
            'user_id'=>$data1['user']
        );

        $this->Vendor_model->insert_img($data);
        redirect('vendor');
        }


    public function bookmark(){
        $name=$_POST['name'];
        $this->Vendor_model->bookmark($name);
        echo json_encode(array("data"=>'Sucsses'));


    }


    public function unbookmark(){
        $name=$_POST['name'];
        $this->Vendor_model->unbookmark($name);

        echo json_encode(array("data"=>'Sucsses'));
    }




}