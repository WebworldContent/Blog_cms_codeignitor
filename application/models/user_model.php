<?php
defined('BASEPATH') OR exit('no direct access');

class User_model extends CI_Model
{
	public function userdata()
	{

		//$this->load->database();
		$query = $this->db->get_where('article',array('user_id'=>1));

		$data = $query->result_array();
		return $data;
	}

	
}

?>