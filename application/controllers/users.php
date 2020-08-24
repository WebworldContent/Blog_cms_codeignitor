<?php
defined('BASEPATH') OR exit('no direct access');

class Users extends MY_Controller
{
	public function index()
	{
		$this->load->model('user_model');
		$data['usersdata'] = $this->user_model->userdata();
		// echo '<pre>';
		// print_r($data);

		$this->load->view('users/index',$data);
	}

	
}
