<?php  class ShoppingCart extends CI_Model {

  public function get()
        {
                $query = $this->db->get('Shoppingcart');
                return $query->result();
        }




} ?>
