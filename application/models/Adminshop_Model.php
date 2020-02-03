<?php  class Adminshop_model extends CI_Model {

  public function get()
        {
                $query = $this->db->get('product');
                return $query->result();
        }

//----------------------delete-----------------------//
        public function deldata($product_ID)
              {
                      $this->db->delete('product',array('product_id'=>$product_ID));

              }
//----------------------จบdelete-----------------------//



//----------------------edit-----------------------//
        public function read($product_ID){
              $this->db->select('*');
              $this->db->from('product');
              $this->db->where('product_ID',$product_ID);
              $query = $this->db->get();
              if($query->num_rows() > 0){
                      $data = $query->row();
                      return $data;
              }
              return FALSE;
        }

        public function editproduct()
        {
              $data = array(
                'product_id' => $this->input->post('product_id'),
                'product_name' => $this->input->post('product_name'),
                'product_type_id' => $this->input->post('product_type_id'),
                'product_price' => $this->input->post('product_price'),
                'product_qty' => $this->input->post('product_qty'),
                'product_detail' => $this->input->post('product_detail'),
              );
              $this->db->where('product_ID', $this->input->post('product_ID'));
              $query=$this->db->update('product',$data);

              if($query){
                redirect('adminshop','refresh');
              }else {
                echo 'false';
              }
        }
//----------------------จบedit-----------------------//



// ---------------------จอยตาราง-------------------------//
        public function jointableshop()
        {
              $this->db->select('product.*,product_type.*');
              $this->db->from('product');
              $this->db->join('product_type','product.product_type_id = product_type.product_type_id');


              $query = $this->db->get();
              return $query->result();
        }


// ---------------------จบจอยตาราง-------------------------//



} ?>
