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
		$this->load->view('admin/nav');
		$this->load->view('admin/regAdmin');
	}

	function loadPage($path, $data){
		$this->load->view('admin/nav');
		$this->load->view('admin/header', $data);
		$this->load->view($path);
		$this->load->view('admin/footer');
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

	
	
	function vendorAccess(){
		$result = $this->Admin_model->allvendor();
		$vendors = [];
	
		foreach($result as $row){
			$data = $row["joinedDate"];  
			$now = time(); 
			$your_date = strtotime($data);
			$datediff = $now - $your_date;
	
			$cont =  round($datediff / (60 * 60 * 24));
	
			if($cont == 83){
				$vendors[] = ['vendorName' => $row['vendorName']];
			}
		}
		
		echo json_encode($vendors);
	}

	// function vendorR(){
	// 	$result = $this->Admin_model->allvendor();
	// 	$data=[];
	// 	$vendorType = '';
	// 	foreach($result as $row){
	// 		$data = $row["joinedDate"];  
	// 		$now = time(); 
	// 		$your_date = strtotime($data);
	// 		$datediff = $now - $your_date;
	
	// 		$cont =  round($datediff / (60 * 60 * 24));
	
	// 		if($cont == 83){
	// 			$vendorName = $row['vendorName'];
	// 			$vendorTypeID =  $row['vendorTypeID'];
	// 			$ven = $this->Admin_model->vendorR($vendorTypeID);
	// 			foreach($ven as $row1){
	// 				$vendorType = $ven['vendorType']; 
	// 				$data['vendorType'] = $vendorType;
	// 			}
				
	// 			$data['vendorName'] = $vendorName;
	// 			$data['Picture'] = $this->Admin_model->ProfileImage($vendorType, $vendorName);
	// 		}
	// 	}
	// 	$this->loadPage('admin/vendorExp', $data);
		
	// }

	// function loadR(){
	// 	$data = '';
	// 	$this->loadPage('admin/vendorExp', $data);
	// }
	
	
}
