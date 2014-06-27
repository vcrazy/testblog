<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model
{
	public function get_news()
	{
		$this->db->select('*');
		$this->db->from('news');

		$query_result = $this->db->get();

		$result_data = array();

		foreach($query_result->result_array() as $single_news)
		{
			$result_data[] = $single_news;
		}

		return $result_data;
	}

	public function get_single_news($id)
	{
		$this->db->select('*');
		$this->db->from('news');
		$this->db->where('id', $id);
		$this->db->limit(1);

		$query_result = $this->db->get();

		$result_data = array();

		if($query_result->num_rows() > 0)
		{
			$result_data = $query_result->row_array();
		}

		return $result_data;
	}

	public function get_comments($news_id)
	{
		$this->db->select('*');
		$this->db->from('comments');
		$this->db->where('news_id', $news_id);
		$this->db->order_by('id', 'desc');

		$query_result = $this->db->get();

		$result_data = array();

		foreach ($query_result->result_array() as $single_comment)
		{
			$result_data[] = $single_comment;
		}

		return $result_data;
	}
}
