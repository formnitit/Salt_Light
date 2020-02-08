<?php  class Adminrecourse_model extends CI_Model {

  public function get()
        {       
                $query = $this->db->get('recourse');
                return $query->result();
        }

//----------------------delete-----------------------//
        public function deldata($recourse_id)
              {
                      $this->db->delete('recourse',array('recourse_id'=>$recourse_id));

              }

//----------------------edit-----------------------//
        public function read($recourse_id){
          $this->db->select('recourse.*,course.*');
          $this->db->from('recourse');
          $this->db->join('course','recourse.course_id = course.course_id');
              $this->db->where('recourse_id',$recourse_id);
              $query = $this->db->get();
              if($query->num_rows() > 0){
                      $data = $query->row();
                      return $data;
              }
              return FALSE;
        }

        public function editrecourse()
        {
              $data = array(
                'recourse_name' => $this->input->post('recourse_name'),
                'recourse_surname' => $this->input->post('recourse_surname'),
                'recourse_address' => $this->input->post('recourse_address'),
                'recourse_email' => $this->input->post('recourse_email'),
                'recourse_phone' => $this->input->post('recourse_phone'),
              );
              $this->db->where('recourse_id', $this->input->post('recourse_id'));
              $query=$this->db->update('recourse',$data);

              if($query){
                redirect('adminrecourse','refresh');
              }else {
                echo 'false';
              }
        }

        // ---------------------จอยตาราง-------------------------//
                public function jointablerecourse()
                {
                      $this->db->select('recourse.*,course.*');
                      $this->db->from('recourse');
                      $this->db->join('course','recourse.course_id = course.course_id');


                      $query = $this->db->get();
                      return $query->result();
                }


        // ---------------------จบจอยตาราง-------------------------//








} ?>
