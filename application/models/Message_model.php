<?php
/**
 * Created by PhpStorm.
 * User: thari
 * Date: 2018-04-06
 * Time: PM 12.32
 */

class Message_model extends CI_Model
{
	function send($vid, $cid, $msg, $time){
		$data = array(
			"allVendorID" => $vid,
			"customerID" => $cid,
			"message" => $msg,
			"timestamp" =>$time
		);
		return $this->db->insert("messages",$data);
	}
}
