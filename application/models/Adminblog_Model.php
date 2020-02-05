<?php  class Adminblog_model extends CI_Model {

  public function get()
        {
                $query = $this->db->get('blog');
                return $query->result();
        }

//----------------------delete-----------------------//
        public function deldata($blog_id)
              {
                      $this->db->delete('blog',array('blog_id'=>$blog_id));

              }

//----------------------edit-----------------------//
        public function read($blog_id){
              $this->db->select('*');
              $this->db->from('blog');
              $this->db->where('blog_id',$blog_id);
              $query = $this->db->get();
              if($query->num_rows() > 0){
                      $data = $query->row();
                      return $data;
              }
              return FALSE;
        }

        public function editblog()
        {
              $data = array(
                'blog_name' => $this->input->post('blog_name'),
                'blog_date' => $this->input->post('blog_date'),
                'blog_type_name' => $this->input->post('blog_type_name'),
                'member_name' => $this->input->post('member_name'),
                'blog_img' => $this->input->post('blog_img'),
                'blog_details' => $this->input->post('blog_details'),
              );
              $this->db->where('blog_id', $this->input->post('blog_id'));
              $query=$this->db->update('blog',$data);

              if($query){
                redirect('adminblog','refresh');
              }else {
                echo 'false';
              }
        }

// จอยตารางบทความ--------------------------
        public function jointableblog()
        {
              $this->db->select('blog.*,blog_type.*,member.*');
              $this->db->from('blog');
              $this->db->join('blog_type','blog.blog_type_id = blog_type.blog_type_id');
              $this->db->join('member','member.member_ID = blog.member_ID');

              $query = $this->db->get();
              return $query->result();
        }









} ?>
