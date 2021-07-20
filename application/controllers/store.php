<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Store extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('pagination');
		$this->load->model('Product_model');
	}

	public function index()
	{
		$input = array();
		$input['order'] = array('id', 'ASC');
		$input['where'] = array('flag' => '1', 'Amount >' => '0');
		$total_rows = $this->Product_model->get_total();
		$this->data['total_rows'] = $total_rows;


		//load ra thu vien phan trang
		$config = array();
		$config['total_rows']  = $total_rows; //tong tat ca cac san pham tren website
		$config['base_url']   = base_url('store/index/'); //link hien thi ra danh sach san pham
		$config['per_page']   = 20; //so luong san pham hien thi tren 1 trang
		$config['uri_segment'] = 3; //phan doan hien thi ra so trang tren url

		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';

		$config['next_link']   = '>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';

		$config['prev_link']   = '<';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a
		></li>';

		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		//khoi tao cac cau hinh phan trang
		$this->pagination->initialize($config);
		$segment = $this->uri->segment(3);
		$segment = intval($segment);
		$input['limit'] = array($config['per_page'], $segment);
		$list = $this->Product_model->get_list($input);
		$this->data['list'] = $list;
		/*echo "<pre>";
				print_r($catalog_list);*/
		$this->data['temp'] = 'store/home/index';
		$this->load->view('store/layout', $this->data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */