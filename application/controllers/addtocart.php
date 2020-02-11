<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addtocart extends CI_Controller {

  
	public function index()
	{
		$this->load->view('css');
		$this->load->view('addtocart');
		$this->load->view('js');

    $this->db->select('*');
    $this->db->from('product');
    $this->db->where('product_id',1001);
    $query = $this->db->get();
    print_r($query->product_name);
	}



}
