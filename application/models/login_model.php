<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model {

  public $variable;

  public function __construct()
  {
    parent::__construct();
    
  }
  public function getUser($email,$password)
  {
    $this->db->select('*');
    $this->db->where('email', $email); 
    $this->db->where('password', $password);
    return $this->db->get('customer_info')->num_rows();
  }

}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */

/* End of file login_model.php */
/* Location: ./application/controllers/login_model.php */