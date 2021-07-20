<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Order extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('cart');
        $this->load->library("session");
        $this->load->helper('date');
    }

    function checkout()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        //lấy ngày hiện tại
        $format = "%Y-%m-%d %H:%i %A";
        $carts = $this->cart->contents();

        //tổng số sản phẩm
        $total_items = $this->cart->total_items();

        if ($total_items <= 0) {
            redirect();
        }
        //tong so tien can thanh toan
        $total_amount = 0;
        foreach ($carts as $row) {
            $total_amount = $total_amount + $row['subtotal'];
        }
        $this->data['total_amount'] = $total_amount;

        //neu thanh vien da dang nhap thì lay thong tin cua thanh vien
        if ($this->session->userdata('user_id_login')) {
            //lay thong tin cua account ->lấy email
            $user_id = $this->session->userdata('user_id_login');

            /*lấy thông tin bảng user*/
            $this->load->model('getUser_model');
            $user_info = $this->getUser_model->get_user($user_id);


            foreach ($user_info as $key => $value) {
                $user_info = $value;
            }
            $this->data['user_info'] = $user_info;

            if ($user_info->email == '') {
                redirect(site_url('user/register'));
            } else {
                $this->data['user_info'] = $user_info;
                $this->load->library('form_validation');
                $this->load->helper('form');
                //neu ma co du lieu post len thi kiem tra
                if ($this->input->post()) {
                    // $this->form_validation->set_rules('email', 'Email nhận hàng', 'required|valid_email');
                    // $this->form_validation->set_rules('name', 'Tên', 'required|min_length[8]');
                    // $this->form_validation->set_rules('phone', 'Số điện thoại', 'required');
                    // $this->form_validation->set_rules('message', 'Ghi chú', 'required');
                    // $this->form_validation->set_rules('payment', 'Cổng thanh toán', 'required');
                    //nhập liệu chính xác

                    $payment = $this->input->post('payment');

                    //them vao csdl
                    $this->db->trans_begin();

                    $data = array(
                        'Status'   => 1, //trang thai cho xac nhan
                        'idCustomer'    => $user_info->id,
                        'Note'       => "", //ghi chú khi mua hàng
                        'total'        => $total_amount, //tong so tien can thanh toan
                        'Payment'       => $payment, //cổng thanh toán,
                        'Address'  => $this->input->post('address'),
                        'OrderDate'       => mdate($format),
                    );
                    //them du lieu vao bang order
                    $this->load->model('Order_model');
                    $this->Order_model->create($data);
                    $order_id = $this->db->insert_id();  //lấy ra id của giao dịch vừa thêm vào
                    $this->session->set_userdata('user_order', $order_id);

                    //them vao bảng order (chi tiết đơn hàng)
                    $this->load->model('Detail_Order_model');
                    foreach ($carts as $row) {

                        $data = array();
                        $this->load->model('product_model');
                        $product = $this->product_model->get_info($row['id']);
                        $data['Amount'] = $product->Amount - $row['qty'];
                        if ($product->Amount - $row['qty'] >= 0) {
                            $this->product_model->update($product->id, $data);

                            $data2 = array(
                                'idOrder'       => $order_id,
                                'idProduct'     => $row['id'],
                                'Amount'         => $row['qty'],
                            );
                            $this->Detail_Order_model->create($data2);
                        } else {
                            $this->db->trans_rollback();
?>
                            <script type="text/javascript">
                                alert("Số lượng của một số sản phẩm không phù hợp bạn vui lòng kiểm tra");
                            </script>
<?php
                        }
                    }

                    $this->db->trans_commit();

                    if ($payment == '0') {

                        //xóa toàn bô giỏ hang
                        $this->cart->destroy();
                        redirect('paypal/success');
                        
                    } elseif ($payment == '1') {

                        $this->load->library('paypal_lib');
                        //Set variables for paypal form
                        $returnURL = base_url() . 'paypal/success'; //payment success url
                        $cancelURL = base_url() . 'paypal/cancel'; //payment cancel url
                        $notifyURL = base_url() . 'paypal/ipn'; //ipn url
                        //get particular product data
                        $logo = base_url() . 'resource/imgs/logo-quangdz.png';


                        $this->paypal_lib->add_field('return', $returnURL);
                        $this->paypal_lib->add_field('cancel_return', $cancelURL);
                        $this->paypal_lib->add_field('notify_url', $notifyURL);
                        $this->paypal_lib->add_field('item_name', 'Thanh toán onl');
                        $this->paypal_lib->add_field('custom', $user_info->id);
                        $this->paypal_lib->add_field('item_number',  1209);
                        $this->paypal_lib->add_field('amount',  $total_amount);
                        $this->paypal_lib->image($logo);

                        $this->paypal_lib->paypal_auto_form();
                    }
                }
            }
        } else {
            redirect(site_url('user/login'));
        }

        $this->data['carts'] = $carts;
        //hiển thị ra view
        $this->data['temp'] = 'site/order/checkout';
        $this->load->view('site/order/layout', $this->data);
    }
}
/* End of file order.php */
/* Location: ./application/controllers/order.php */