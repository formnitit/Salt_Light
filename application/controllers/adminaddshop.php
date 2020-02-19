<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminaddshop extends CI_Controller {


	public function index()
	{
		$this->load->view('admin/header_admin');
		$this->load->view('admin/css_admin');
		$this->load->view('admin/banner_admin');
		$this->load->view('admin/adminaddshop');
		$this->load->view('admin/footer_admin');
    $this->load->view('admin/js_admin');
	}

	// ---------------------------------logout--------
		public function index1()
		{
			$this->load->view('admin/header_admin');
			$this->load->view('admin/css_admin');
			$this->load->view('admin/banner_admin');
			$this->load->view('loginadmin/adminaddshop1');
			$this->load->view('admin/footer_admin');
			$this->load->view('admin/js_admin');
		}


	public function adding()
	{
		$config['upload_path'] = './assets/img/uploadimg/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '2000';
		$config['max_width'] = '3000';
		$config['max_heigth'] = '3000';

		$this->load->library('upload',$config);
		if (! $this->upload->do_upload('product_img'))
		{
			echo $this->upload->display_errors();
		}else {
			$data = $this->upload->data();
			$filename = $data['file_name'];

		$data = array(
			'product_id' => $this->input->post('product_id'),
			'product_img' => $filename,
			'product_name' => $this->input->post('product_name'),
			'product_type_id' => $this->input->post('product_type_id'),
			'product_price' => $this->input->post('product_price'),
			'product_qty' => $this->input->post('product_qty'),
			'product_detail' => $this->input->post('product_detail')
		);

	 	// echo '<pre>';
		// print_r($data);
		// echo '</pre>';
		// exit;

		$query=$this->db->insert('product',$data);
		if($query){
			redirect('adminshop','refresh');
		}else {
			echo 'false';
			}
		}
	}
}
