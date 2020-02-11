<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ShoppingCart extends CI_Controller {

	public function __construct()
	{
 		parent::__construct();
		$this->load->model('ShoppingCart_model');
	}

	public function index()
	{
		$this->load->view('header_view');
		$this->load->view('css');
		$this->load->view('banner');
		$this->load->view('ShoppingCart');
		$this->load->view('footer');
		$this->load->view('js');
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


		public function addtocart($product_id)
		{
			$this->db->select('*');
			$this->db->from('ShoppingCart');
			$this->db->where('product_id',$product_id);
			$query = $this->db->get();
			exit;
echo "<script language=\"javascript\">alert('test');</script>";
			if($query->num_rows() > 0){
							//$data = $query->row();

			}else {
				$data = array(
					'product_id' => $product_id,
					'member_ID' => 13,
					'ShoppingCart_Quantity' => 1,
					$query=$this->db->insert('Shoppingcart',$data);

			}
return true;
		}


}
