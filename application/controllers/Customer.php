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
        if(($this->session->userdata('logged')==1) &($this->session->userdata('utype')=='customer')) {
            $data['bookmarks'] = $this->Customer_model->get_bookmarks();
            $this->load->view('templates/header');
            $this->load->view('bookmark', $data);
            $this->load->view('templates/footer');
        }

        else{
            redirect('login');
        }
    }


    public function cart(){

        $this->Customer_model->addCart();
        redirect('customer/cartshow');

    }

    public function cartshow(){
        if(($this->session->userdata('logged')==1) &($this->session->userdata('utype')=='customer')) {
            $data['items'] = $this->Customer_model->get_cart_itemes();
            $data['ammount']=$this->Customer_model->get_initial_ammount();
            $data['total']=$this->Customer_model->get_total();
            $data['current']=$this->Customer_model->get_current();
            $this->load->view('templates/header');
            $this->load->view('cart', $data);
            $this->load->view('templates/footer');
        }

        else{
            redirect('login');
        }
    }

    public function initial(){
        $initial=$this->Customer_model->get_initial_value();
        echo json_encode(array("data"=>$initial));
    }

    public function set_initial(){
        $this->Customer_model->set_initial();
         echo json_encode(array("data"=>'Sucsses'));
    }

    public function total(){
        $total=$this->Customer_model->total();
        echo json_encode(array("data"=>$total));
    }

    public function book(){
        $book=$this->Customer_model->book();
        echo json_encode(array("data"=>$book));
    }

    public function bookconfirm(){
        $this->Customer_model->bookconfirm();
        echo json_encode(array("data"=>'success'));
    }

    public function delete_item($id){
        $this->Customer_model->delete_item($id);
        echo json_encode(array("data"=>'success'));
    }

}