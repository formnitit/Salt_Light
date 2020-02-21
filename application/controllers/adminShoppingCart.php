<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminShoppingCart extends CI_Controller {

	public function __construct()
				        {
				                parent::__construct();
				                $this->load->model('ShoppingCart_Model');
								}

								//----------------------เพิ่ม-----------------------//
		public function index()
		{

		$data['query']=$this->ShoppingCart_Model->get();

		// echo '<pre>';
		// print_r($data);
		// echo '</pre>';
		//
		// exit;

		$this->load->view('admin/header_admin');
		$this->load->view('admin/css_admin');
		$this->load->view('admin/banner_admin');
		$this->load->view('admin/adminShoppingCart',$data);
		$this->load->view('admin/footer_admin');
    $this->load->view('admin/js_admin');

		// echo '<pre>';
		// print_r($data);
		// echo '</pre>';
		// exit;
	}

	// ---------------------------------logout--------
		public function index1()
		{
			$this->load->view('admin/header_admin');
			$this->load->view('admin/css_admin');
			$this->load->view('admin/banner_admin');
			$this->load->view('loginadmin/adminshop1');
			$this->load->view('admin/footer_admin');
			$this->load->view('admin/js_admin');
		}


	//----------------------ลบ-----------------------//
	public function delete($ShoppingCart_id)
	{
		$this->ShoppingCart_Model->deldata($ShoppingCart_id);
		redirect('AdminShoppingCart','refresh');
	}



	public function show($ShoppingCart_id)
	{

	$data['rowshow']=$this->ShoppingCart_Model->read($ShoppingCart_id);
	// echo '<pre>';
	// print_r($data);
	// echo '</pre>';
	// exit;
	$this->load->view('admin/header_admin');
	$this->load->view('admin/css_admin');
	$this->load->view('admin/banner_admin');
	$this->load->view('admin/adminShoppingCartDetails',$data);
	$this->load->view('admin/footer_admin');
	$this->load->view('admin/js_admin');

}

public function Success($ShoppingCart_id)
{

 $data['rowshow']=$this->ShoppingCart_Model->read($ShoppingCart_id);
$data['query']=$this->ShoppingCart_Model->get1($ShoppingCart_id);
// echo '<pre>';
// print_r($data);
// echo '</pre>';
// exit;
$this->load->view('admin/header_admin');
$this->load->view('admin/css_admin');
$this->load->view('admin/banner_admin');
$this->load->view('admin/adminSuccess',$data);
$this->load->view('admin/footer_admin');
$this->load->view('admin/js_admin');

}

public function edit_success()
{
	// echo '<pre>';
	// print_r($_POST);
	// echo '</pre>';
	// exit;
	$data = array(
		'ShoppingCart_Payment_status' => $this->input->post('Success1'),
		'ShoppingCart_Order_status' => $this->input->post('Success2'),
	);
	// echo '<pre>';
	// print_r($data);
	// echo '</pre>';
	// exit;
	$this->db->where('ShoppingCart_id', $this->input->post('ShoppingCart_id'));
	$query=$this->db->update('shoppingcart',$data);

	if($query){
		redirect('adminShoppingCart','refresh');
	}else {
		echo 'false';
		}
			}
}
?>
