<?php  class ShoppingCart_Model extends CI_Model {

  public function get()
        {
                $query = $this->db->get('product');
                return $query->result();
        }

        public function Cart($id)
        {
        $this->db->where('product_id',$id);
        $get = $this->db->get('product');
        return $get->row();
        }




} ?>
