<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admincourseedit extends CI_Controller {

	public function __construct()
				        {
				                parent::__construct();
				                $this->load->model('admincourse_model');
								}


	public function edit1()
	{
		$this->load->view('admin/header_admin');
		$this->load->view('admin/css_admin');
		$this->load->view('admin/banner_admin');
		$this->load->view('admin/admincourseedit');
		$this->load->view('admin/footer_admin');
    $this->load->view('admin/js_admin');
	}

	// ---------------------------------logout--------
		public function index1()
		{
			$this->load->view('admin/header_admin');
			$this->load->view('admin/css_admin');
			$this->load->view('admin/banner_admin');
			$this->load->view('loginadmin/admincourseedit1');
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
		if (! $this->upload->do_upload('course_img'))
		{
			echo $this->upload->display_errors();
		}else {
			$data = $this->upload->data();
			$filename = $data['file_name'];
				$data = array(
					'course_name' => $this->input->post('course_name'),
					'course_datestart' => $this->input->post('course_datestart'),
					'course_dateend' => $this->input->post('course_dateend'),
					'course_price' => $this->input->post('course_price'),
					'course_detail' => $this->input->post('course_detail'),
					'course_skill' => $this->input->post('course_skill'),
					'course_img' => $filename
				);
				// echo '<pre>';
				// print_r($data);
				// echo '</pre>';
				// exit;
				$this->db->where('course_id', $this->input->post('course_id'));
				$query=$this->db->update('course',$data);

				if($query){
					redirect('admincourse','refresh');
				}else {
					echo 'false';
				}
	}
}




}
