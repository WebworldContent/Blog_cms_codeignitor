<?php
defined('BASEPATH') OR exit('no direct access');

class Article_edit_model extends CI_Model
{
	public function arti_add($array_data)
	{
		$name = $array_data['article_title'];
		$text = $array_data['article_text'];
		$url =$array_data['article_url'];
		$user_id =$array_data['user_id'];
		$image_path = $array_data['image_path'];

	 return $this->db->insert('article',['article_name'=>$name,'article_text'=>$text,'url'=>$url,'user_id'=>$user_id,'image_path'=>$image_path]);
	}

	public function edit_model($article_id)
	{
		$query = $this->db->select(['article_name','article_text','id','url'])
					->from('article')
					->where('id',$article_id)
					->get();
			return $query->result_array();
	}

	public function update_model($edited_data)
	{
		$article_id = $edited_data['article_id'];
		$name = $edited_data['article_title'];
		$url = $edited_data['article_url'];
		$text = $edited_data['article_text'];
		$image_path = $edited_data['image_path'];
		
		return $this->db->where('id',$article_id)
				->update('article',['article_name'=>$name,'article_text'=>$text,'url'=>$url,'image_path'=>$image_path]);
	}

	public function delete_model($article_id)
	{
		return $this->db->where('id',$article_id)
						->delete('article');
	}
}