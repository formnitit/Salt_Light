<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ShoppingCart extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ShoppingCart_Model');
		$this->load->library('cart');

	}

	public function index()
	{
		$id = $this->input->post('id');
		$qty  = $this->input->post('qty');
		$cart = $this->ShoppingCart_Model->Cart($id);

					$data = array
					(
			        'id'      => $cart->product_id,
			        'qty'     => $qty,
			        'price'   => $cart->product_price,
			        'name'    => $cart->product_name,
			        'img' => $cart->product_img

					);

			$this->cart->insert($data);

		$this->load->view('header_view');
		$this->load->view('css');
		$this->load->view('banner');
		$this->load->view('ShoppingCart');
		$this->load->view('footer');
		$this->load->view('js');
	}

	public function Cart_remove()
	{

		$id = $this->input->get('id');

		$this->cart->update(array('rowid' => $id , 'qty' => 0));
		redirect('Welcome');


	}

	public function Cart_del()
	{
		$this->cart->destroy();
		redirect('Index');
	}


	// ---------------------------------logout--------
		public function index1()
		{
			$this->load->view('header_view');
			$this->load->view('css');
			$this->load->view('bannerlogout');
			$this->load->view('login/ShoppingCart1');
			$this->load->view('login/footer1');
			$this->load->view('js');
		}


// 		public function addtocart($product_id)
// 		{
// 			$this->db->select('*');
// 			$this->db->from('ShoppingCart');
// 			$this->db->where('product_id',$product_id);
// 			$query = $this->db->get();
// 			exit;
// echo "<script language=\"javascript\">alert('test');</script>";
// 			if($query->num_rows() > 0){
// 							//$data = $query->row();
//
// 			}else {
// 				$data = array(
// 					'product_id' => $product_id,
// 					'member_ID' => 13,
// 					'ShoppingCart_Quantity' => 1,
// 					$query=$this->db->insert('Shoppingcart',$data);
//
// 			}
// return true;
// 		}


}
