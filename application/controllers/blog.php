<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		//lay danh sach slide
		$this->load->model('blog_model');
		$blog_list = $this->blog_model->get_list();
		$this->data['blog_list'] = $blog_list;

		// echo "<pre>";
		// print_r($blog_list);

		$this->load->view('site/blog/blog_page', $this->data);
	}
}

/* End of file blog.php */
/* Location: ./application/controllers/blog.php */