<?php  class Admincontact_model extends CI_Model {

  public function get()
        {
                $query = $this->db->get('contact');
                return $query->result();
        }
        } ?>
