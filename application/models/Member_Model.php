<?php  class Member_model extends CI_Model {

  public function get()
        {
                $query = $this->db->get('contact');
                return $query->result();
        }


        public function fetch_user_login($member_email,$member_pass)
        {
          $this->db->where('member_email',$member_email);
          $this->db->where('member_pass',$member_pass);
          $query = $this->db->get('member');
          return $query->row();
        }

}
        ?>
