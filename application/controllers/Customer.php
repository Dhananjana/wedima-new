<?php
/**
 * Created by PhpStorm.
 * User: thari
 * Date: 2018-05-12
 * Time: AM 5.44
 */

class Customer extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Customer_model');
    }
    public function bookmarksview(){
        $data['bookmarks']=$this->Customer_model->get_bookmarks();
        $this->load->view('templates/header');
        $this->load->view('bookmark', $data);
        $this->load->view('templates/footer');
    }
}