<?php  class ShoppingCart_Model extends CI_Model {

  public function get()
        {
                $query = $this->db->get('shoppingcart');
                return $query->result();
        }

        public function get1($ShoppingCart_id)
              {
                      $this->db->where('ShoppingCart_id',$ShoppingCart_id);
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
  //----------------------delete-----------------------//



                      public function read($ShoppingCart_id){
                            $this->db->select('shoppingcart.*,product.*');
                            $this->db->from('shoppingcart');
                            $this->db->join('product','shoppingcart.product_id = shoppingcart.product_id');
                            $this->db->where('ShoppingCart_id',$ShoppingCart_id);
                            $query = $this->db->get();
                            if($query->num_rows() > 0){
                                    $data = $query->row();
                                    return $data;
                            }
                            return FALSE;
                      }

} ?>
