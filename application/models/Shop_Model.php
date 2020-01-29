<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop_Model extends CI_model {

  public function get()
        {
            $query = $this->db->get('product');
            return $query->result();
        }
  }
