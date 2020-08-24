<?php
defined('BASEPATH') OR exit('no direct script access');

class Home extends MY_Controller
{

	public function index()
	{
		$this->load->view('front/hello');
	}

	public function authen()
	{
		$this->load->model('authen');
		$data = $this->authen->test();

		print_r($data);
	}

	public function string_test()
	{
		$this->load->helper('test');

		string();

		echo "<br/>";

		$this->load->library('string_test');

		$this->string_test->abc();
	}
}


?>



