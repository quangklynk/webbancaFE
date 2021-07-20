<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class getUser_model extends CI_Model
{

	public $variable;

	public function __construct()
	{
		parent::__construct();
		$this->load->library("session");
	}
	public function get_user($id)
	{
		$this->db->select('*');
		$this->db->from('account a');
		$this->db->join('customers b', 'a.email = b.email', 'left');
		$this->db->where('a.email', $id);
		$dulieu = $this->db->get();
		/*lay ve lam stdclass*/
		$dulieu = $dulieu->result();
		return $dulieu;
	}
	public function getuser_detailorder($id)
	{
		$this->db->select('a.idOrder ,a.Amount, b.ProductName, b.Image, b.Price, b.Distributor');
		$this->db->from('detailorders a');
		$this->db->join('products b', 'a.idProduct = b.id', 'left');
		$this->db->join('orders c', 'a.idOrder = c.id', 'left');
		$this->db->where('c.idCustomer', $id);
		$dulieu = $this->db->get();
		/*lay ve lam stdclass*/
		$dulieu = $dulieu->result();
		return $dulieu;
	}
	public function getuser_order($id)
	{
		$this->db->select('a.id,total,Payment,OrderDate,Note,Address, c.name, d.Vote');
		$this->db->from('orders a');
		$this->db->join('status_order c', 'c.id = a.Status', 'left');
		$this->db->join('rating d', 'd.idOrder = a.id', 'left');
		$this->db->where('a.idCustomer', $id);
		$this->db->order_by("a.OrderDate", "DESC");
		$dulieu = $this->db->get();
		/*lay ve lam stdclass*/
		$dulieu = $dulieu->result();
		return $dulieu;
	}
	public function creat_account_customer($email, $password, $name, $phone, $address)
	{
		$dulieu = array(
			'p_email' => $email,
			'p_password' => $password,
			'p_name' => $name,
			'p_address' => $address,
			'p_phone' => $phone,
		);
		$insert_user_sp = "CALL creat_account_customer (?, ?, ?, ?, ?)";
		$result = $this->db->query($insert_user_sp, $dulieu);
		if ($result !== NULL) {
			return TRUE;
		}
		return FALSE;
	}
	/*xử lí user khi chưa đăng nhập*/
	public function getData_user($id)
	{
		$this->db->select('*');
		$this->db->from('customers a');
		$this->db->where('a.id', $id);
		$dulieu = $this->db->get();
		/*lay ve lam stdclass*/
		$dulieu = $dulieu->result();
		return $dulieu;
	}
	public function getAllData_user()
	{
		$this->db->select('*');
		$this->db->from('customers');
		$dulieu = $this->db->get();
		/*lay ve lam stdclass*/
		$dulieu = $dulieu->result();
		return $dulieu;
	}
	/*end*/
	public function insertData($id_user, $id_cus, $name, $phone, $address, $image)
	{
		$dulieu = array(
			'id' => $id_user,
			'email' => $id_cus,
			'Address' => $address,
			'Phone' => $phone,
			'CustomerName' => $name,
			'image' => $image,
		);
		$this->db->insert('customers', $dulieu);
		return $this->db->insert_id();
		//trả về 1 là đúng,0 là sai
	}
	/*end*/
	public function updateData($id_user, $email, $name, $phone, $address, $image)
	{

		$dulieucanupdate = array(
			'id' => $id_user,
			'email' => $email,
			'CustomerName' => $name,
			'Phone' => $phone,
			'Address' => $address,
			'image' => $image,
		);
		$this->db->where('id', $id_user);
		return $this->db->update('customers', $dulieucanupdate);
	}
	/*change pass*/
	public function updatePass($email, $password)
	{
		$dulieucanupdate = array(
			'email' => $email,
			'Password' => $password,
		);
		$this->db->where('email', $email);
		return $this->db->update('account', $dulieucanupdate);
	}
	/*end change*/
	public function insertData_user($id_user, $name, $phone, $address, $image)
	{
		$dulieu = array(
			'id'	=> $id_user,
			'Address' => $address,
			'Phone' => $phone,
			'CustomerName' => $name,
			'image' => $image,
		);
		$this->db->insert('customers', $dulieu);
		return $this->db->insert_id();
		//trả về 1 là đúng,0 là sai
	}
	public function get_order($id)
	{
		$this->db->select('*');
		$this->db->from('orders a');
		$this->db->join('customers b', 'a.idCustomer = b.id', 'left');
		$this->db->where('a.id', $id);
		$dulieu = $this->db->get();
		/*lay ve lam stdclass*/
		$dulieu = $dulieu->result();
		return $dulieu;
	}



	// rating get list product to rating
	public function get_detailorder($id)
	{
		$this->db->select('*');
		$this->db->from('detailorders a');
		$this->db->where('a.idOrder', $id);
		$dulieu = $this->db->get();
		/*lay ve lam stdclass*/
		$dulieu = $dulieu->result();
		return $dulieu;
	}

	// add rating
	public function rating($idCus, $idPro, $idOrd, $vote)
	{
		$dulieu = array(
			'idCustomer'	=> $idCus,
			'idProduct' => $idPro,
			'idOrder ' => $idOrd,
			'Vote' => $vote,
		);

		$this->db->insert('rating', $dulieu);
		return $this->db->insert_id();
	}

	// get rating of product
	public function get_rating($id)
	{
		$this->db->select('*');
		$this->db->from('rating a');
		$this->db->where('a.idProduct', $id);
		$dulieu = $this->db->get();
		/*lay ve lam stdclass*/
		$dulieu = $dulieu->result();
		return $dulieu;
	}

	// get vote rating of product
	public function get_voterating($id)
	{
		$this->db->select('COUNT(a.Vote) as unit, a.vote');
		$this->db->from('rating a');
		$this->db->where('a.idProduct', $id);
		$this->db->group_by('a.vote');
		$dulieu = $this->db->get();
		/*lay ve lam stdclass*/
		$dulieu = $dulieu->result();
		return $dulieu;
	}
}

/* End of file getUser_model.php */
/* Location: ./application/models/getUser_model.php */