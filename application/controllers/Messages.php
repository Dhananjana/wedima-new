<?php
/**
 * Created by PhpStorm.
 * User: Dhananjana
 * Date: 4/16/2018
 * Time: 7:44 PM
 */
class Messages extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	function messagePage(){
		$this->load->view('templates/header1');
		$this->load->view('templates/header');
		$this->load->view('messages');
	}
}

?>
