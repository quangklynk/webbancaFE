<?php
class User extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->library("session");
        $this->load->library('pagination');
    }

    /*
     * Kiểm tra email đã tồn tại chưa
     */
    function check_email()
    {
        $email = $this->input->post('email');
        $where = array('email' => $email);
        //kiêm tra xem email đã tồn tại chưa
        if ($this->user_model->check_exists($where)) {
            //trả về thông báo lỗi
            $this->form_validation->set_message(__FUNCTION__, 'Email đã tồn tại');
            return false;
        }
        return true;
    }

    /*
     * Đăng ký thành viên
     */
    function register()
    {
        $this->load->library('form_validation');
        $this->load->helper('form');
        //neu ma co du lieu post len thi kiem tra
        if ($this->input->post()) {
            /* $this->form_validation->set_rules('name', 'Tên', 'required|min_length[8]');*/
            $this->form_validation->set_rules('email', 'Email đăng nhập', 'required|callback_check_email');
            // $this->form_validation->set_rules('password', 'Mật khẩu', 'required|min_length[6]');
            // $this->form_validation->set_rules('re_password', 'Nhập lại mật khẩu', 'matches[password]');
            /*$this->form_validation->set_rules('phone', 'Số điện thoại', 'required');
            $this->form_validation->set_rules('address', 'Địa chỉ', 'required');*/

            //nhập liệu chính xác
            if ($this->form_validation->run()) {
                //them vao csdl
                $password = $this->input->post('password');
                $password = md5($password);
                // $data = array(
                //     'email'    => $this->input->post('email'),
                //     'Password' => $password,
                //     'idRole'   => 'guest',
                //     'flag'     =>  1,
                // );
                $email = $this->input->post('email');
                $name = $this->input->post('name');
                $phone = $this->input->post('phone');
                $address = $this->input->post('address');
                $this->load->model('getUser_model');
                $trangthai = $this->getUser_model->creat_account_customer($email, $password, $name, $phone, $address);

                if ($trangthai) {
                    $this->session->set_flashdata('message', 'Đăng ký thành viên thành công');
                } else {
                    $this->session->set_flashdata('message', 'Không thêm được');
                }

                // if ($this->user_model->create($data)) {
                //     //tạo ra nội dung thông báo
                //     $this->session->set_flashdata('message', 'Đăng ký thành viên thành công');
                // } else {
                //     $this->session->set_flashdata('message', 'Không thêm được');
                // }
                //chuyen tới trang danh sách quản trị viên
                // redirect(site_url());

                $message = $this->session->flashdata('message');
                $this->data['message'] = $message;
                /*nhận biến massage truyền đi view */
                $this->data['temp'] = 'site/user/main';
                $this->load->view('site/user/layout_login', $this->data);
                // redirect(site_url());
            }
        }
        //hiển thị ra view
        // $this->load->view('site/layout', $this->data);
    }

    /*
     * Kiem tra đăng nhập
     */
    function login()
    {
        //neu dang dang nhap thi chuyen ve trang thong tin thanh vien
        if ($this->session->userdata('user_id_login')) {
            redirect(site_url('user'));
        }

        $this->load->library('form_validation');
        $this->load->helper('form');

        if ($this->input->post()) {
            $this->form_validation->set_rules('email', 'Email đăng nhập', 'required');
            $this->form_validation->set_rules('password', 'Mật khẩu', 'required');
            $this->form_validation->set_rules('login', 'login', 'callback_check_login');
            if ($this->form_validation->run()) {
                //lay thong tin thanh vien
                $user = $this->_get_user_info();
                //gắn session id của thành viên đã đăng nhập thành công
                //biến user_id_login chứa id của thành viên đăng nhập
                $this->session->set_userdata('user_id_login', $user->email);

                $this->session->set_flashdata('message', 'Đăng nhập thành công');

                $message = $this->session->flashdata('message');
                $this->data['message'] = $message;
                redirect(site_url('store'));
            }
        }

        //hiển thị ra view
        $this->data['temp'] = 'site/user/main';
        $this->load->view('site/user/layout_login', $this->data);
    }

    /*
     * Kiem tra email va password co chinh xac khong
     */
    function check_login()
    {
        $user = $this->_get_user_info();
        if ($user) {
            if ($user->flag == 1) {
                return true;
            }
        }
        $this->form_validation->set_message(__FUNCTION__, 'Không đăng nhập thành công');
        return false;
    }

    /*
     * Lay thong tin cua thanh vien
     */
    private function _get_user_info()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $password = md5($password);

        $where = array('email' => $email, 'password' => $password);
        $user = $this->user_model->get_info_rule($where);

        return $user;
    }
    /*
     * Chinh sua thong tin thanh vien
     */
    function edit()
    {
        if (!$this->session->userdata('user_id_login')) {
            redirect(site_url('user/login'));
        }
        //lay thong tin cua thanh vien
        $user_id = $this->session->userdata('user_id_login');
        $user = $this->user_model->get_id($user_id);
        if (!$user) {
            redirect();
        }
        $this->data['user']  = $user;
        $this->load->library('form_validation');
        $this->load->helper('form');
        /*lấy thông tin từ bảng user*/
        $this->load->model('getUser_model');
        $user_info = $this->getUser_model->get_user($user_id);
        foreach ($user_info as $key => $value) {
            $user_info = $value;
        }
        $this->data['user_info'] = $user_info;
        /*có dữ liệu và muốn chỉnh sửa*/


        //xử lý phần ảnh avatar
        $target_dir = "resource/imgs/user/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;

        // Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }

        // Check file size
        if ($_FILES["image"]["size"] > 50000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }


        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "lỗi file không được upload";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                /* echo "The file ". htmlspecialchars( basename( $_FILES["anhavatar"]["name"])). " has been uploaded.";*/
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }


        //neu ma co du lieu post len thi kiem tra
        if ($this->input->post()) {
            $this->form_validation->set_rules('phone', 'Số điện thoại', 'required');
            $this->form_validation->set_rules('address', 'Địa chỉ', 'required');

            //nhập liệu chính xác
            if ($this->form_validation->run()) {

                /*thêm vào csdl table user*/
                $this->load->model('getUser_model');
                $id_user = $this->input->post('id_user');
                $email = $this->input->post('email');
                $name = $this->input->post('name');
                $phone = $this->input->post('phone');
                $address = $this->input->post('address');
                $image = $_FILES["image"]["name"];



                if ($this->getUser_model->updateData($id_user, $email, $name, $phone, $address, $image)) {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Chỉnh sửa thông tin thành công');
                    $message = $this->session->flashdata('message');
                    $this->data['message'] = $message;
                    $this->load->view('site/end/user', $this->data);
                } else {
                    $this->session->set_flashdata('message', 'Không thành công');
                    redirect(site_url('user/edit'));
                }
                //chuyen tới trang danh sách quản trị viên
                redirect(site_url('user'));
            }
        }
        //hiển thị ra view
        $this->data['temp'] = 'site/user/edit';
        $this->load->view('site/user/layout', $this->data);
    }

    /*
     * Thong tin cua thanh vien
     */
    public function index()
    {
        if (!$this->session->userdata('user_id_login')) {
            redirect();
        }
        $user_id = $this->session->userdata('user_id_login');
        //lấy thông tin của thành viên
        $user = $this->user_model->get_id($user_id);
        if (!$user) {
            redirect();
        }
        $this->data['user']  = $user;
        /*lay data table user*/
        $this->load->model('getUser_model');
        $user_info = $this->getUser_model->get_user($user_id);
        foreach ($user_info as $key => $value) {
            $user_info = $value;
        }
        $user_order = $this->getUser_model->getuser_order($user_info->id);
        $this->data['user_order'] = $user_order;

        $user_detailorder = $this->getUser_model->getuser_detailorder($user_info->id);
        $this->data['user_detailorder'] = $user_detailorder;

        $this->data['user_info'] = $user_info;

        $this->data['temp'] = 'site/user/index_user';
        $this->load->view('site/user/layout_user', $this->data);
    }
    /*start change pass*/
    function change_pass()
    {
        $user_id = $this->session->userdata('user_id_login');
        $user = $this->user_model->get_id($user_id);
        if (!$user) {
            redirect();
        }
        $this->data['user']  = $user;
        $this->load->library('form_validation');
        $this->load->helper('form');
        /*lấy thông tin từ bảng user*/
        $this->load->model('getUser_model');
        $user_info = $this->getUser_model->get_user($user_id);
        foreach ($user_info as $key => $value) {
            $user_info = $value;
        }
        $this->data['user_info'] = $user_info;
        //neu ma co du lieu post len thi kiem tra
        if ($this->input->post()) {
            $this->form_validation->set_rules('current-password', 'mat khau cu', 'callback_check_pass');
            //nhập liệu chính xác
            if ($this->form_validation->run()) {
                /*thêm vào csdl table user*/
                $this->load->model('getUser_model');
                $email =  $this->session->userdata('user_id_login'); // lấy email từ session
                $password = $this->input->post('new-password');
                $password = md5($password);
                if ($this->getUser_model->updatePass($email, $password)) {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'chage pass thanh cong');
                    $message = $this->session->flashdata('message');
                    $this->data['message'] = $message;
                    redirect(site_url('user/login_changepass'));
                } else {
                    $this->session->set_flashdata('message', 'Không thành công');
                    redirect(site_url('user'));
                }
                //chuyen tới trang danh sách quản trị viên
                //redirect(site_url('user'));
            }
        }
    }
    /*end change*/

    // đánh giá sản phẩm

    function rating()
    {
        $user_id = $this->session->userdata('user_id_login');
        $user = $this->user_model->get_id($user_id);
        if (!$user) {
            redirect();
        }


        if ($this->input->post()) {
            // $this->form_validation->set_rules('current-password', 'mat khau cu', 'callback_check_pass');
            //nhập liệu chính xác
            // if ($this->form_validation->run()) {
            /*thêm vào csdl table user*/
            $this->load->model('getUser_model');
            $rating = $this->input->post('rating');
            $idOrd = $this->input->post('idOrd');
            $user_info = $this->getUser_model->get_user($user_id);
            $detailorder = $this->getUser_model->get_detailorder($idOrd);
            foreach ($detailorder as $row) {
                $this->getUser_model->rating($user_info[0]->id, $row->idProduct, $row->idOrder, $rating);
            }

            // if ($this->getUser_model->rating($email, $password)) {
            //     //tạo ra nội dung thông báo
            //     $this->session->set_flashdata('message', 'chage pass thanh cong');
            //     $message = $this->session->flashdata('message');
            //     $this->data['message'] = $message;
            // } else {
            //     $this->session->set_flashdata('message', 'Không thành công');
            redirect(site_url('user'));
            // }
        }
    }

    function cancel_order()
    {
        if ($this->input->post()) {
            $order_id = $this->input->post('order_id');  //lấy category_id từ view
            $this->load->model('order_model');
            $this->db->set('Status', '3');
            $this->db->where('id', $order_id);
            $this->db->update('orders');


            $result = "Hủy thành công";
            echo json_encode($result);      //trả về response dưới dạng json
        }
    }

    function check_pass()
    {
        $password = $this->input->post('current-password');
        $password = md5($password);
        $where = array('Password' => $password);
        //kiêm tra xem email đã tồn tại chưa
        if (!$this->user_model->check_exists($where)) {
            //trả về thông báo lỗi
            $this->form_validation->set_message(__FUNCTION__, 'mat khau khong dung');
            return false;
        }
        return true;
    }
    /*
     * Thuc hien dang xuat
     */
    function login_changepass()
    {
        if ($this->session->userdata('user_id_login')) {
            $this->session->unset_userdata('user_id_login');
        }
        $this->session->set_flashdata('message', 'Đăng xuất thành công');
        redirect(site_url('user/login'));
    }
    function logout()
    {
        if ($this->session->userdata('user_id_login')) {
            $this->session->unset_userdata('user_id_login');
        }
        $this->session->set_flashdata('message', 'Đăng xuất thành công');
        redirect();
    }
}
