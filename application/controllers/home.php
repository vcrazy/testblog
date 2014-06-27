<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('Home_model');
	}

	public function index()
	{
		$all_news = $this->Home_model->get_news();

		$this->load->view('header');

		$this->load->view('home_view', array(
			'news' => $all_news
		));

		$this->load->view('footer');
	}

	public function preview($id)
	{
		$single_news = $this->Home_model->get_single_news($id);

		if (empty($single_news))
		{
			header('Location: /testblog');
			exit;
		}

		$comments = $this->Home_model->get_comments($id);

		$this->load->view('header');

		$this->load->view('preview_view', array(
			'news' => $single_news,
			'comments' => $comments
		));

		$this->load->view('footer');
	}
}
