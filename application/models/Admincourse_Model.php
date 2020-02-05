<?php  class Admincourse_model extends CI_Model {

  public function get()
        {
                $query = $this->db->get('course');
                return $query->result();
        }

//----------------------delete-----------------------//
        public function deldata($course_id)
              {
                      $this->db->delete('course',array('course_id'=>$course_id));

              }

//----------------------edit-----------------------//
        public function read($course_id){
              $this->db->select('*');
              $this->db->from('course');
              $this->db->where('course_id',$course_id);
              $query = $this->db->get();
              if($query->num_rows() > 0){
                      $data = $query->row();
                      return $data;
              }
              return FALSE;
        }
//----------------------------------------------------------//



} ?>
