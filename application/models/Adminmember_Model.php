<?php  class Adminmember_model extends CI_Model {

  public function get()
        {
                $query = $this->db->get('member');
                return $query->result();
        }
















} ?>
