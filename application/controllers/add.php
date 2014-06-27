<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add extends CI_Controller
{
	public function index()
	{
		if ( !empty($_POST))
		{
			$this->load->model('Add_model');

			$title = $_POST['title'];
			$description = $_POST['description'];

			$this->Add_model->create_news($title, $description);

			header('Location: /testblog');
			exit;
		}

		$this->load->view('header');
		$this->load->view('add_view');
		$this->load->view('footer');
	}
}
