<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('cart');
	}

	public function index()
	{
		$carts = $this->cart->contents();

		//tổng số sản phẩm trong giỏ hàng
		$total_items = $this->cart->total_items();

		$this->data['carts'] = $carts;
		$this->data['total_items']  = $total_items;

		$this->data['temp']  = 'site/cart/index';
		$this->load->view('site/cart/layout', $this->data);
	}
	function add()
	{
		$this->load->model('product_model');
		$id = $this->uri->segment(3);
		$product = $this->product_model->get_info($id);
		if (!$product) {
			redirect(site_url('store'));
		}
		$data = array(
			'id'      => $product->id,
			'qty'     => 1,
			'price'   => $product->Price,
			'name'    => $product->ProductName,
			'image'	  => $product->Image,
			'amount'  => $product->Amount,
		);

		$this->cart->insert($data);

		redirect(site_url('store'));
	}
	public function update()
	{
		//thong gio hang
		$carts = $this->cart->contents();
		// print_r($carts);
		foreach ($carts as $key => $row) {
			//tong so luong san pham
			$total_qty = $this->input->post('qty_' . $row['id']);
			$data = array();
			$data['rowid'] = $key;
			$data['qty'] = $total_qty;
			$this->cart->update($data);
		}

		//chuyen sang trang danh sach san pham trong gio hang
		redirect(base_url('cart'));
	}

	/*
     * Xoa sản phẩm trong gio hang
     */
	function del()
	{
		$id = $this->uri->rsegment(3);
		$id = intval($id);
		//trường hợp xóa 1 sản phẩm nào đó trong giỏ hàng
		if ($id > 0) {
			//thong gio hang
			$carts = $this->cart->contents();
			foreach ($carts as $key => $row) {
				if ($row['id'] == $id) {
					//tong so luong san pham
					$data = array();
					$data['rowid'] = $key;
					$data['qty'] = 0;
					$this->cart->update($data);
				}
			}
		} else {
			//xóa toàn bô giỏ hang

			$this->cart->destroy();
		}

		//chuyen sang trang danh sach san pham trong gio hang
		redirect(base_url('cart'));
	}
}

/* End of file cart.php */
/* Location: ./application/controllers/cart.php */