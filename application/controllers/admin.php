<?php
defined('BASEPATH') OR exit('no direct access');

class Admin extends MY_Controller
{


	public function index() 
	{	
		if($this->session->userdata('id'))
		{
			return redirect('admin/article_list');
		}
		// $this->load->helper('form');
		$this->load->view('admin/login');
	}

	public function check_login()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username','User Name','required|alpha|trim');
		$this->form_validation->set_rules('password','Password','required|trim');

		if($this->form_validation->run() == TRUE) 
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			//$this->logged_in($username,$password);

			$this->load->model('admin_model');

			$login_id = $this->admin_model->validate_login($username,$password);
			if($login_id)
			{	
				
				$this->session->set_userdata('id',$login_id);
				redirect('admin/logged_in');
			}
			else
			{
				$this->session->set_flashdata('login_error','Invalid Username or Password');
				$this->load->view('admin/login');
			}
		}
		else
		{
			redirect('admin');

		}
	}

	public function logged_in()
	{
		if(! $this->session->userdata('id') )
		{
			return redirect('admin');
		}
		else
		{
			return redirect('admin/article_list');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('id');
		 return redirect('admin');
	}


	public function article_list()
	{
		
		$this->load->model('arti_list_model');
		$data['arti_name'] = $this->arti_list_model->article_model();

		$this->load->view('admin/article_list',$data);
	}

	public function add_article()
	{
		// $this->load->helper('form');
		if($this->session->userdata('id') )
		{
			
			$this->load->view('admin/article_add');
		}
	}

	public function article_value()
	{	
		$config['upload_path'] = './uploads';
		$config['allowed_types'] = 'jpg|jpeg|png';

		$this->load->library('upload',$config);

		$post_data = $this->input->post();
		unset($post_data['submit']);
			//print_r($post_data);
			$this->upload->do_upload('userfile');
				$image_data = $this->upload->data();
				$image_path = $image_data['raw_name'].$image_data['file_ext'];
				$post_data['image_path']=$image_path;

			$this->load->model('article_edit_model');
			if($this->article_edit_model->arti_add($post_data) && $this->upload->do_upload('userfile'))
			{
				
				$this->session->set_flashdata('inserted','Article successfully inserted');
				redirect('admin/article_list');
			}
			else if($this->upload->display_errors())
			{	
				
				
				$upload_error = $this->upload->display_errors();
				$this->session->set_flashdata('upload_error',$upload_error);
			redirect('admin/article_list');
				
			}
	}

	public function edit_article($para)
	{
		//echo 'working';
		//echo $para;
		if($this->session->userdata('id') )
		{
			
		// $this->load->helper('form');
		$this->load->model('article_edit_model');
		$article_data['edit_data'] = $this->article_edit_model->edit_model($para);

		
		$this->load->view('admin/article_edit',$article_data);

		}

	}

	public function update_article()
	{
		
			$config['upload_path'] = './uploads';
		$config['allowed_types'] = 'jpg|jpeg|png';

		$this->load->library('upload',$config);


		$edited_data = $this->input->post();

		unset($edited_data['submit']);

		$this->upload->do_upload('userfile_edit');
			$user_data  = $this->upload->data();
			$image_data = $user_data['raw_name'].$user_data['file_ext'];
			$edited_data['image_path'] = $image_data;
		//print_r($edited_data);

		$this->load->model('article_edit_model');
		if($this->article_edit_model->update_model($edited_data)&& $this->upload->do_upload('userfile_edit'))
		{
			// echo 'success';
			$this->session->set_flashdata('success_update','Your changes has been updated!!');
			redirect('admin/article_list');
			
		}
		else
		{
			// echo 'unsuccess';
			$upload_error = $this->upload->display_errors();
				$this->session->set_flashdata('upload_error',$upload_error);
			redirect('admin/article_list');
			
		}
	}


	public function delete_article($para)
	{
		// echo 'delete';
		// echo $para;
		$this->load->model('article_edit_model');
		if($this->article_edit_model->delete_model($para))
		{
			
			$this->session->set_flashdata('deleted','Article is deleted');
			redirect('admin/article_list');
		}
		else
		{
			
			$this->session->set_flashdata('not_deleted','Unable to delete');
			redirect('admin/article_list');
		}
	}

	public function upload()
	{
		
			
		// $config['upload_path'] = './uploads';
		// $config['allowed_types'] = 'jpg|jpeg|png';

		// $this->load->library('upload',$config);

		// if($this->upload->do_upload('userfile'))
		// {
		// 	echo 'success';
		// 	$data = $this->upload->data();
		// 	print_r($data);
		// }
		// else
		// {
		// 	$upload_error = $this->upload->display_errors();
		// 	echo $upload_error;
		// }

		// // $upload_error = $this->upload->display_errors();
		// // 		if($upload_error)
		// // 		{
		// // 			//$this->load->view('admin/article_add',compact('upload_error'));
		// // 			echo 'unsuccessful';
		// // 		}
		// // 		else
		// // 		{
		// // 			echo 'success';
		// // 		}
	}

}