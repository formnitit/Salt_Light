<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminaddpromotion extends CI_Controller {


	public function index()
	{
		$this->load->view('admin/header_admin');
		$this->load->view('admin/css_admin');
		$this->load->view('admin/banner_admin');
		$this->load->view('admin/adminaddpromotion');
		$this->load->view('admin/footer_admin');
    $this->load->view('admin/js_admin');
	}

	public function adding()
	{
		$data = array(
			'promotion_name' => $this->input->post('promotion_name'),
			'promotion_detail' => $this->input->post('promotion_detail'),
			'promotion_code' => $this->input->post('promotion_code'),
			'promotion_datestart' => $this->input->post('promotion_datestart'),
      'promotion_dateend' => $this->input->post('promotion_dateend'),
		);

	 	// echo '<pre>';
		// print_r($data);
		// echo '</pre>';
		// exit;

		$query=$this->db->insert('promotion',$data);
		if($query){
			redirect('adminpromotion','refresh');
		}else {
			echo 'false';
		}
	}
}
