<?php  class Admincontact_model extends CI_Model {

  public function get()
        {
                $query = $this->db->get('contact');
                return $query->result();
        }
        //----------------------delete-----------------------//
                public function deldata($contact_id)
                      {
                              $this->db->delete('contact',array('contact_id'=>$contact_id));

                      }
        } ?>
