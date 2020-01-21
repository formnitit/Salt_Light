<?php  class Adminmember_model extends CI_Model {

  public function get()
        {
                $query = $this->db->get('member');
                return $query->result();
        }

//----------------------delete-----------------------//
        public function deldata($member_ID)
              {
                      $this->db->delete('member',array('member_ID'=>$member_ID));

              }

//----------------------edit-----------------------//
        public function read($member_ID){
              $this->db->select('*');
              $this->db->from('member');
              $this->db->where('member_ID',$member_ID);
              $query = $this->db->get();
              if($query->num_rows() > 0){
                      $data = $query->row();
                      return $data;
              }
              return FALSE;
        }

        public function editmember()
        {
              $data = array(
                'member_name' => $this->input->post('member_name'),
                'member_name_lastname' => $this->input->post('member_name_lastname'),
                'member_pass' => $this->input->post('member_pass'),
                'member_email' => $this->input->post('member_email'),
                'member_phonenumber' => $this->input->post('member_phonenumber'),
                'member_type' => $this->input->post('member_type'),
              );
              $this->db->where('member_ID', $this->input->post('member_ID'));
              $query=$this->db->update('member',$data);

              if($query){
                echo 'edit ok';
              }else {
                echo 'false';
              }
        }









} ?>
