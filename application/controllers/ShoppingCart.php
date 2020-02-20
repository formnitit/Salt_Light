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
		if ($this->input->post('id'))
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
			$this->load->view('bannerlogout');
			$this->load->view('ShoppingCart');
			$this->load->view('footer');
			$this->load->view('js');
		}
		else
		{
			$this->load->view('header_view');
			$this->load->view('css');
			$this->load->view('bannerlogout');
			$this->load->view('ShoppingCart');
			$this->load->view('footer');
			$this->load->view('js');
		}

	}

	public function Cart_remove()
	{

		$id = $this->input->get('id');

		$this->cart->update(array('rowid' => $id , 'qty' => 0));
		redirect('ShoppingCart/index');


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
			$this->load->view('banner');
			$this->load->view('login/ShoppingCart1');
			$this->load->view('login/footer1');
			$this->load->view('js');
		}



		public function Add_order()
		{
			// echo '<pre>';
			//  print_r($_POST);
			// echo '</pre>';
			//  exit;


			$config['upload_path'] = './assets/img/Slip/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '2000';
			$config['max_width'] = '3000';
			$config['max_heigth'] = '3000';


			$this->load->library('upload',$config);

			if (! $this->upload->do_upload('ShoppingCart_slip'))
			{
				echo $this->upload->display_errors();
			}else
			{
				$data = $this->upload->data();

				$filename = $data['file_name'];
				// echo '<pre>';
				//  print_r($filename);
				// echo '</pre>';
				//  exit;
				if ($cartAs = $this->cart->contents())
				{

					foreach ($cartAs as $key => $itemAs) :



							$data = array(
								'ShoppingCart_Name' => $this->input->post('ShoppingCart_Name'),
								'ShoppingCart_slip' => $filename,
								'ShoppingCart_Email' => $this->input->post('ShoppingCart_Email'),
								'ShoppingCart_Phone' => $this->input->post('ShoppingCart_Phone'),
								'product_id' => $itemAs['id'],
								'ShoppingCart_Quantity' => $itemAs['qty'],
								'ShoppingCart_total' => $this->cart->total(),
								'ShoppingCart_pricec' => $itemAs['price'] * $itemAs['qty'],
								'ShoppingCart_img' => $itemAs['img'],
								'ShoppingCart_Payment_status' => '1',
								'ShoppingCart_Order_status' => '1'
							);



								$query=$this->db->insert('shoppingcart',$data);

								endforeach;
							}

			if($query){
				redirect('Order','refresh');
			}else {
				echo 'false';
				}
			}
			}


public function Promotion($value='')
{
$query['pro'] = $this->db->get_where('promotion', array('promotion_code' => $value));
print_r($query);
echo '<script type="text/javascript">alert("hello!");</script>';
}


}
