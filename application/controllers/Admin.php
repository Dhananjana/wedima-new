<?php
class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
	}

	function login(){
		$this->load->view('admin/header');
		$this->load->view('admin/regAdmin');
	}

	function loadPage($path, $data){
		$this->load->view('admin/nav');
		$this->load->view('admin/header', $data);
		$this->load->view($path);
	}
	function reg(){
		$data[]='';
		$this->loadPage('admin/regAdmin', $data);
	}

	function home(){
		$data[]='';
		$this->loadPage('admin/index',$data);
	}
	function register(){
		$data = array(
			'email'=> $this->input->post('email'),
			'password' => $this->input->post('password')
		);
		$this->Admin_model->register($data);
		$this->loadPage('admin/index');
	}
	// function checkMail(){
	// 	$bool = "hello";
	// 	$email = $this->input->post('email');
	// 	$query = $this->Admin_model->checkMail();
	// 	foreach($query->result() as $row){
	// 		$email2	= $row->email;
	// 		if($email == $email2 ){
	// 			$bool = true;
	// 		}
	// 	}
	// 	return $bool;
	// }

	function vendor(){
		$data['vendor'] = $this->Admin_model->allvendor();
		$this->loadPage('admin/vendor', $data);
	}

	function customer(){
		$data['customer']=$this->Admin_model->customer();
		$this->loadPage('admin/customer', $data);
	}
	
	
}
