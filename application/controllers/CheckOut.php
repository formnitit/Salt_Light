<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CheckOut extends CI_Controller {


	public function index()
	{

			$this->load->view('header_view');
			$this->load->view('css');
			$this->load->view('bannerlogout');
			$this->load->view('CheckOut');
			$this->load->view('footer');
			$this->load->view('js');

	}

	// ---------------------------------logout--------

		public function Add_order()
		{

			$config['upload_path'] = './assets/img/Slip/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '2000';
			$config['max_width'] = '3000';
			$config['max_heigth'] = '3000';


			$this->load->library('upload',$config);

			if (! $this->upload->do_upload('ShoppingCart_slip'))
			{
				echo $this->upload->display_errors();
			}else {
				$data = $this->upload->data();

				$filename = $data['file_name'];
				// echo '<pre>';
				//  print_r($filename);
				// echo '</pre>';
				//  exit;
			$data = array(
				'member_ID'         => $this->input->post('id'),
				'ShoppingCart_Name' => $this->input->post('ShoppingCart_Name'),
				'ShoppingCart_slip' => $filename,
				'ShoppingCart_Email' => $this->input->post('ShoppingCart_Email'),
				'ShoppingCart_Phone' => $this->input->post('ShoppingCart_Phone'),
				'ShoppingCart_Details' => $this->input->post('ShoppingCart_Details'),
				'product_id' => $items['id'],
				'ShoppingCart_Quantity' => $items['qty'],
				'ShoppingCart_total' => $this->cart->total,
				'ShoppingCart_pricec' => $items['price'] * $items['qty'],
				'ShoppingCart_img' => $items['img'],
				'ShoppingCart_Payment_status' => '1',
				'ShoppingCart_Order_status' => '1'
			);



			$query=$this->db->insert('shoppingcart',$data);
			if($query){
				redirect('Order','refresh');
			}else {
				echo 'false';
				}
			}
		}

}
?>
