<?php
/**
 * Created by PhpStorm.
 * User: thari
 * Date: 2018-03-30
 * Time: AM 9.48
 */

class Login extends CI_Controller
{
    public function index(){
        $this->load->view('templates/header');
        $this->load->view('login');

    }

    public function validate(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name','Email', 'required');
        $this->form_validation->set_rules('password','Password', 'required');
        if($this->form_validation->run()){
            $email1 = $this->input->post('name');
            $pass = $this->input->post('password');
            $this->load->model('Login_model');
            $data['user']=$this->Login_model->can_login($email1, $pass);
            if($data['user']!=NULL){
                /*$session_data = array(
                         $username = 'username'
                    );*/
                $this->session->set_userdata('logged','1');
                $this->session->set_userdata('username',$email1);
                $this->session->set_userdata('utype',$data['user']['usertype']);
                $this->session->set_userdata('name',$data['user']['name']);
                $this->session->set_flashdata('msg', 'You are succesfully loginto the system!.');
                redirect(base_url().'home');
            }
            else{
                $this->session->set_flashdata('error','Invalid username and password');
                $this->index();
            }
        }
        else{
            $this->index();
        }
    }

    public function logout(){
        $this->session->sess_destroy();

        redirect(base_url() .'home');
    }

    public function register(){
        $data['register'] = $this->load->view('registerview',NUll, TRUE);
        $this->load->view('templates/header');
        $this->load->view('register',$data);
        $this->load->view('templates/footer');
    }
}