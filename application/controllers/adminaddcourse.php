<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminaddcourse extends CI_Controller {


	public function index()
	{
		$this->load->view('admin/header_admin');
		$this->load->view('admin/css_admin');
		$this->load->view('admin/banner_admin');
		$this->load->view('admin/adminaddcourse');
		$this->load->view('admin/footer_admin');
    $this->load->view('admin/js_admin');
	}

	public function adding()
	{
	 	// echo '<pre>';
		// print_r($data);
		// echo '</pre>';
		// exit;
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
				'course_img' => $filename,
				'course_dateend' => $this->input->post('course_dateend'),
				'course_price' => $this->input->post('course_price'),
				'course_detail' => $this->input->post('course_detail'),
				'course_skill' => $this->input->post('course_skill'),
			);

			$query=$this->db->insert('course',$data);
			if($query){
				redirect('admincourse','refresh');
			}else {
				echo 'false';
			}
		}
	}
}
