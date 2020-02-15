<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminpromotionedit extends CI_Controller {

	public function __construct()
				        {
				                parent::__construct();
				                $this->load->model('adminpromotion_model');
								}


	public function edit1()
	{
		$this->load->view('admin/header_admin');
		$this->load->view('admin/css_admin');
		$this->load->view('admin/banner_admin');
		$this->load->view('admin/adminpromotionedit');
		$this->load->view('admin/footer_admin');
    $this->load->view('admin/js_admin');
	}

	// ---------------------------------logout--------
		public function index1()
		{
			$this->load->view('admin/header_admin');
			$this->load->view('admin/css_admin');
			$this->load->view('admin/banner_admin');
			$this->load->view('loginadmin/adminpromotionedit1');
			$this->load->view('admin/footer_admin');
			$this->load->view('admin/js_admin');
		}

	public function edit()
	{
		$config['upload_path'] = './assets/img/uploadimg/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '2000';
		$config['max_width'] = '3000';
		$config['max_heigth'] = '3000';

		$this->load->library('upload',$config);
		if (! $this->upload->do_upload('promotion_img'))
		{
			echo $this->upload->display_errors();
		}else {
			$data = $this->upload->data();
			$filename = $data['file_name'];
				$data = array(
					'promotion_name' => $this->input->post('promotion_name'),
					'promotion_datestart' => $this->input->post('promotion_datestart'),
					'promotion_dateend' => $this->input->post('promotion_dateend'),
					'promotion_code' => $this->input->post('promotion_code'),
					'promotion_discount' => $this->input->post('promotion_discount'),
					'promotion_detail' => $this->input->post('promotion_detail'),
					'promotion_img' => $filename
				);
				// echo '<pre>';
				// print_r($data);
				// echo '</pre>';
				// exit;
				$this->db->where('promotion_id', $this->input->post('promotion_id'));
				$query=$this->db->update('promotion',$data);

				if($query){
					redirect('adminpromotion','refresh');
				}else {
					echo 'false';
					}
				}
			}
			//--------------------------------------------------//























}
