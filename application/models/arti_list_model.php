<?php
defined('BASEPATH') OR exit('no direct access');

class Arti_list_model extends CI_Model
{
	public function article_model()
	{
		$user_id = $this->session->userdata('id');
	$query = $this->db->get_where('article',['user_id'=>$user_id]);

	return $query->result_array();

	}
}