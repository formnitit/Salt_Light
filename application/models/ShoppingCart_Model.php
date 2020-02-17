<?php  class ShoppingCart_Model extends CI_Model {

  public function get()
        {
                $query = $this->db->get('shoppingcart');
                return $query->result();
        }

        public function Cart($id)
        {
        $this->db->where('product_id',$id);
        $get = $this->db->get('product');
        return $get->row();
        }

        //----------------------delete-----------------------//
                public function deldata($ShoppingCart_id)
                      {
                              $this->db->delete('shoppingcart',array('ShoppingCart_id'=>$ShoppingCart_id));

                      }


} ?>
