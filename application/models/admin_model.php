<?php
defined('BASEPATH') OR exit('no direct access');

class Admin_model extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function validate_login($username,$password)
	{
		
		$q = $this->db->get_where('user',['fname'=>$username,'password'=>$password]);
						
		if ($q->num_rows() >0)
		{
			$user_id = $q->row()->id;
			return $user_id;
		}
		else 
		{
			return FALSE;
		}
	}
	

}