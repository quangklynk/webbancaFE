<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_controller extends CI_Controller
{
	//biến gởi dữ liệu sang view
	public $data = array();
	public function __construct()
	{
		parent::__construct();
		$this->load->library("session");
		$this->load->library('cart');

		$controller = $this->uri->segment(1);
		switch ($controller) {
			case 'admin': {
					//xử lý dữ liệu khi truy vấn vào trang admin
					$this->_check_login();
					break;
				}


			default: {
					//xử lý dữ liệu ở trang ngoài
					// lấy danh sách danh mục sản phẩm
					$this->load->model('catalog_model');
					$input = array();
					$input['where'] = array('parent_id' => NULL);
					$catalog_list = $this->catalog_model->get_list($input);
					/*lấy danh mục con trong danh mục cha*/
					foreach ($catalog_list as $row) {
						$input['where'] = array('parent_id' => $row->id);
						$subs = $this->catalog_model->get_list($input);
						$row->subs = $subs;
					}
					$this->data['catalog_list'] = $catalog_list;

					//kiem tra xem thanh vien da dang nhap hay chua
					$user_id_login = $this->session->userdata('user_id_login');
					$this->data['user_id_login'] = $user_id_login;
					//neu da dang nhap thi lay thong tin cua thanh vien
					if ($user_id_login) {
						$this->load->model('user_model');
						$user_info = $this->user_model->get_id($user_id_login);
						$this->data['user_info'] = $user_info;
					}
					if ($user_id_login) {
						$this->load->model('getUser_model');
						$user_id  = $this->getUser_model->get_user($user_id_login);
						$this->data['user_id'] =  $user_id;
					}

					// $user_detailorder = $this->getUser_model->getuser_detailorder(2);
					// echo "<pre>";
					// print_r($user_detailorder);

					$this->data['total_items']  = $this->cart->total_items();
				}
		}
	}
	/*
		kiểm tra trạng thái đăng nhập
		 */
	public function _check_login()
	{
		$controller = $this->uri->rsegment('1');
		$controller = strtolower($controller);

		$login = $this->session->userdata('login');
		//neu ma chua dang nhap,ma truy cap 1 controller khac login
		if (!$login && $controller != 'login') {
			redirect(admin_url('login'));
		}
		//neu ma admin da dang nhap thi khong cho phep vao trang login nua.
		if ($login && $controller == 'login') {
			redirect(admin_url('home'));
		}
	}
}

/* End of file MY_controller.php */
/* Location: ./application/controllers/MY_controller.php */