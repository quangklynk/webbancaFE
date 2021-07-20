<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Paypal extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Order_model');
        $this->load->library('cart');
        $this->load->library("session");
        $this->load->library('paypal_lib');
    }

    function success()
    {

        $paypalInfo = $this->input->get();

        if ($paypalInfo) {
            $this->cart->destroy();
            //tạo ra nội dung thông báo
            $this->session->set_flashdata('message', 'Bạn đã đặt hàng thành công, chúng tôi sẽ kiểm tra và gửi hàng cho bạn');
        }

        //pass the transaction data to view
        $this->load->view('paypal/success');
    }

    function cancel()
    {

        $user_order = $this->session->userdata('user_order');

        if ($user_order) {

            $this->db->where('idOrder', $user_order);

            $this->db->delete('detailorders');

            $this->db->where('id', $user_order);

            $this->db->delete('orders');

            $this->session->unset_userdata('user_order');

            $this->load->view('paypal/cancel');
        } else {
            redirect();
        }
    }

    function ipn()
    {
        //paypal return transaction details array
        $paypalInfo = $this->input->post();

        $data['user_id'] = $paypalInfo['custom'];
        $data['product_id'] = $paypalInfo["item_number"];
        $data['txn_id'] = $paypalInfo["txn_id"];
        $data['payment_gross'] = $paypalInfo["payment_gross"];
        $data['currency_code'] = $paypalInfo["mc_currency"];
        $data['payer_email'] = $paypalInfo["payer_email"];
        $data['payment_status'] = $paypalInfo["payment_status"];

        $paypalURL = $this->paypal_lib->paypal_url;
        $result = $this->paypal_lib->curlPost($paypalURL, $paypalInfo);

        //check whether the payment is verified
        if (preg_match("/VERIFIED/i", $result)) {
            //insert the transaction data into the database
            $dulieucanupdate = array(
                'Note' => "ok nha"
            );
            $this->db->where('id', $data['product_id']);
            $this->db->update('order', $dulieucanupdate);
        }
        $this->load->view('paypal/success', $data);
    }
    // function ipn()
    // {
    //     // Retrieve transaction data from PayPal IPN POST 
    //     $paypalInfo = $this->input->post();

    //     if (!empty($paypalInfo)) {
    //         // Validate and get the ipn response 
    //         $ipnCheck = $this->paypal_lib->validate_ipn($paypalInfo);

    //         // Check whether the transaction is valid 
    //         if ($ipnCheck) {
    //             // Check whether the transaction data is exists 
    //             $prevPayment = $this->payment->getPayment(array('txn_id' => $paypalInfo["txn_id"]));
    //             if (!$prevPayment) {
    //                 // Insert the transaction data in the database 
    //                 $data['user_id']    = $paypalInfo["custom"];
    //                 $data['product_id']    = $paypalInfo["item_number"];
    //                 $data['txn_id']    = $paypalInfo["txn_id"];
    //                 $data['payment_gross']    = $paypalInfo["mc_gross"];
    //                 $data['currency_code']    = $paypalInfo["mc_currency"];
    //                 $data['payer_name']    = trim($paypalInfo["first_name"] . ' ' . $paypalInfo["last_name"], ' ');
    //                 $data['payer_email']    = $paypalInfo["payer_email"];
    //                 $data['status'] = $paypalInfo["payment_status"];

    //                 // $this->payment->insertTransaction($data);
    //                 //insert the transaction data into the database
    //                 $dulieucanupdate = array(
    //                     'Note' => "ok nha"
    //                 );
    //                 $this->db->where('id', $data['product_id']);
    //                 $this->db->update('orders', $dulieucanupdate);
    //             }
    //         }
    //     }
    // }
}
