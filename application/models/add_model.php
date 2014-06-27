<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_model extends CI_Model
{
	public function create_news($title, $description)
	{
		return $this->db->insert('news', array(
			'title' => $title,
			'description' => $description
		));
	}
}
