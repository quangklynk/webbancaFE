<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		//lấy danh sách sản phẩm quảng
		$this->load->model('product_model');
		$input = array();
		$input['where'] = array('Remark' => '1');
		$input['where'] = array('flag !=' => '0');
		$input['limit'] = array(10,0);

		$product_newest = $this->product_model->get_list($input);
	    $this->data['product_abs'] = $product_newest;
	    /*lấy content*/

	   //lay danh sach slide
	    $this->load->model('slide_model');
	    $slide_list = $this->slide_model->get_list();
	    $this->data['slide_list'] = $slide_list;

	    /*lấy sản phẩm bán mời*/
	    $this->load->model('product_model');
	    $input2 = array();
	    $input2['limit'] = array(9,0);
		$input2['where'] = array('flag !=' => '0');
	    $input2['order'] = array('Date', 'DESC');
	    $product_buy = $this->product_model->get_list($input2);
		$this->data['product_new']  = $product_buy;

	    /*echo "<pre>";
				print_r($product_newest2);*/
		
		$this->data['temp']='site/home/index';
		$this->load->view('site/layout',$this->data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */