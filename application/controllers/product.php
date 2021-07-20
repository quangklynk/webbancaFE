<?php
class Product extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        //load model san pham
        $this->load->model('product_model');
        $this->load->model('getUser_model');
        $this->load->library('cart');
        $this->load->helper('array');
    }

    /*
     * Hiển thị danh sách sản phẩm theo danh mục
     */
    function catalog()
    {
        //lấy ID của thể loại
        $id = intval($this->uri->rsegment(3));
        //lay ra thông tin của thể loại
        $this->load->model('catalog_model');
        $catalog = $this->catalog_model->get_info($id);
        if (!$catalog) {
            redirect();
        }

        $this->data['catalog'] = $catalog;
        $input = array();

        //kiêm tra xem đây là danh con hay danh mục cha
        if ($catalog->parent_id == NULL) {
            $input_catalog = array();
            $input_catalog['where']  = array('parent_id' => $id);
            $catalog_subs = $this->catalog_model->get_list($input_catalog);
            if (!empty($catalog_subs)) //neu danh muc hien tai co danh muc con
            {
                $catalog_subs_id = array();
                foreach ($catalog_subs as $sub) {
                    $catalog_subs_id[] = $sub->id;
                }
                //lay tat ca san pham thuoc cac danh mục con do
                $this->db->where_in('idCategory', $catalog_subs_id);
            } else {
                $input['where'] = array('idCategory' => $id);
            }
        } else {
            $input['where'] = array('idCategory' => $id, 'flag' => '1', 'Amount >' => '0');
        }


        //lấy ra danh sách sản phẩm thuộc danh mục đó
        //lay tong so luong ta ca cac san pham trong websit
        $total_rows = $this->product_model->get_total($input);
        $this->data['total_rows'] = $total_rows;

        //load ra thu vien phan trang
        $this->load->library('pagination');
        $config = array();
        $config['total_rows'] = $total_rows; //tong tat ca cac san pham tren website
        $config['base_url']   = base_url('product/catalog/' . $id); //link hien thi ra danh sach san pham
        $config['per_page']   = 8; //so luong san pham hien thi tren 1 trang
        $config['uri_segment'] = 4; //phan doan hien thi ra so trang tren url
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

        $segment = $this->uri->segment(4);
        $segment = intval($segment);

        $input['limit'] = array($config['per_page'], $segment);


        //lay danh sach san pham
        if (isset($catalog_subs_id)) {
            $this->db->where_in('idCategory', $catalog_subs_id);
        }
        $list = $this->product_model->get_list($input);
        $this->data['list'] = $list;

        //hiển thị ra view
        $this->data['temp'] = 'store/home/index';
        $this->load->view('store/layout', $this->data);
    }

    /*
     * Xem chi tiết sản phẩm
     */
    function view()
    {
        //lay id san pham muon xem
        $id = $this->uri->rsegment(3);
        $product = $this->product_model->get_info($id);
        if (!$product) redirect();
        $this->data['product'] = $product;

        //lấy danh sách ảnh sản phẩm kèm theo
        /*  $image_list = @json_decode($product->image_list);
        $this->data['image_list'] = $image_list;*/

        if ($product->flag != 0 && $product->Amount > 0) {
            //cap nhat lai luot xem cua san pham
            $data = array();
            $data['view'] = $product->view + 1;
            $this->product_model->update($product->id, $data);

            // //lay thong tin cua danh mục san pham
            // $catalog = $this->catalog_model->get_info($product->idCategory);
            // $this->data['catalog'] = $catalog;

            $rating = $this->getUser_model->get_rating($id);
            $index_LRating = count($rating); // lấy độ dài của rating
            $average_rating = 0;
            if ($index_LRating > 0) {

                foreach ($rating as $row) {
                    $average_rating += $row->Vote;
                }
                $average_rating /= $index_LRating;
                $vote = $this->getUser_model->get_voterating($product->id);
                foreach ($vote as $value) {
                    if ($value->vote == 5) {
                        $this->data['five_start'] = $value->unit;
                    } elseif ($value->vote == 4) {
                        $this->data['four_start'] = $value->unit;
                    } elseif ($value->vote == 3) {
                        $this->data['threee_start'] = $value->unit;
                    } elseif ($value->vote == 2) {
                        $this->data['two_start'] = $value->unit;
                    } else {
                        $this->data['one_start'] = $value->unit;
                    }
                }
            } else {
                $this->data['five_start'] = 0;
                $this->data['four_start'] = 0;
                $this->data['threee_start'] = 0;
                $this->data['two_start'] = 0;
                $this->data['one_start'] = 0;
            }

            $this->data['average_rating'] = $average_rating;
            $this->data['index_LRating'] = $index_LRating;
            //lay thong tin cua các san pham ưu tiên
            $this->load->model('product_model');
            $input = array();
            $input['where'] = array('Remark' => '1');
            $input['limit'] = array(5, 0);

            $product_newest = $this->product_model->get_list($input);
            $this->data['product_abs'] = $product_newest;

            //hiển thị ra view
            $this->data['temp'] = 'site/product/view';
            $this->load->view('site/product/layout_detail_pro', $this->data);
        } else {
            $this->data['heading'] = "Sản phẩm không khả dụng";
            $this->data['message'] = "Sản phẩm không tồn tại! Quý khách vui lòng quay lại trang chủ và chọn sản phẩm khác";
            $this->load->view('errors/html/error_404', $this->data);
        }
    }

    /*
     * Tim kiem theo ten san pham
     */
    function search()
    {
        $key = ($this->uri->segment(3) != "") ? $this->uri->segment(3) : $this->input->get('key-search');

        //lấy ra danh sách sản phẩm theo từ khóa
        $this->data['key'] = trim($key);
        $input = array();
        $input['like'] = array('ProductName', $key);

        //lay tong so luong ta ca cac san pham trong websit
        $total_rows = $this->product_model->get_total($input);
        $this->data['total_rows'] = $total_rows;

        //load ra thu vien phan trang
        $this->load->library('pagination');
        $config = array();
        $config['total_rows'] = $total_rows; //tong tat ca cac san pham tren website
        $config['base_url']   = base_url('index.php/product/search/' . $key); //link hien thi ra danh sach san pham
        $config['per_page']   = 8; //so luong san pham hien thi tren 1 trang
        $config['uri_segment'] = 4; //phan doan hien thi ra so trang tren url
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

        $segment = $this->uri->segment(4);
        $segment = intval($segment);
        $input['limit'] =  array($config['per_page'], $segment);
        $input['where'] = array('flag' => '1', 'Amount >' => '0');

        $list = $this->product_model->get_list($input);

        $this->data['list']  = $list;

        //load view
        $this->data['temp'] = 'store/home/index';
        $this->load->view('store/layout', $this->data);


        //load view
        // $this->data['temp'] = 'store/home/index';
        // $this->load->view('store/layout', $this->data);

        // if ($this->uri->rsegment('3') == 1) {
        //     //xu ly autocomplete
        //     $result = array();
        //     foreach ($list as $row) {
        //         $item = array();
        //         $item['id'] = $row->id;
        //         $item['label'] = $row->name;
        //         $item['value'] = $row->name_pro;
        //         $result[] = $item;
        //     }
        //     //du lieu tra ve duoi dang json
        //     die(json_encode($result));
        // } else {


        // }
    }

    /*
     * Tim kiem theo gia san pham
     */
    function search_price()
    {
        $price_from = intval($this->input->get('price_from'));
        $price_to   = intval($this->input->get('price_to'));
        $this->data['price_from'] = $price_from;
        $this->data['price_to'] = $price_to;

        //loc theo gia
        $input  = array();
        $input['where'] = array('price >= ' => $price_from, 'price <=' => $price_to);
        $list = $this->product_model->get_list($input);
        $list = $this->product_model->get_total($input);
        $this->data['list'] = $list;

        //load view
        $this->data['temp'] = 'site/product/search_price';
        $this->load->view('site/layout', $this->data);
    }
}
