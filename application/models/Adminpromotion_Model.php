<?php  class Adminpromotion_model extends CI_Model {

  public function get()
        {
                $query = $this->db->get('promotion');
                return $query->result();
        }

//----------------------delete-----------------------//
        public function deldata($promotion_id)
              {
                      $this->db->delete('promotion',array('promotion_id'=>$promotion_id));

              }

//----------------------edit-----------------------//
        public function read($promotion_id){
              $this->db->select('*');
              $this->db->from('promotion');
              $this->db->where('promotion_id',$promotion_id);
              $query = $this->db->get();
              if($query->num_rows() > 0){
                      $data = $query->row();
                      return $data;
              }
              return FALSE;
        }

        public function editpromotion()
        {
              $data = array(
                'promotion_name' => $this->input->post('promotion_name'),
                'promotion_detail' => $this->input->post('promotion_detail'),
                'promotion_code' => $this->input->post('promotion_code'),
                'promotion_datestart' => $this->input->post('promotion_datestart'),
                'promotion_dateend' => $this->input->post('promotion_dateend'),
              );
              $this->db->where('promotion_id', $this->input->post('promotion_id'));
              $query=$this->db->update('promotion',$data);

              if($query){
                redirect('adminpromotion','refresh');
              }else {
                echo 'false';
              }
        }









} ?>
