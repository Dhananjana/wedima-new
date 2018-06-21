<?php
/**
 * Created by PhpStorm.
 * Register: thari
 * Date: 2018-05-28
 * Time: AM 10.13
 */

class Register extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
    }

    public function index(){
        $this->load->view('templates/header');
        $this->load->view('register');
        $this->load->view('templates/footer');
    }

    public function customer(){
        $this->Login_model->register_customer();
        redirect('Home');
    }

    public function vendor(){
        $this->Login_model->register_vendor();
        redirect('Home');
    }
}