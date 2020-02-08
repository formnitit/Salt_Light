<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Login_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function login($email, $password)
    {
       $this->db->where('email', $email);
       $this->db->where('password', $password);
       $query = $this->db->get('member');

       if ($query->num_rows() > 0)
       {
        return true;
       }
       else
       {
        return false;
       }

    }

    public function addmember($member_email)
{

        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
        // exit;
        $this->db->select('*');
        $this->db->from('member');
        $this->db->where('member_email',$member_email);
        $get = $this->db->get();
        return $get->result();
      }
      }


?>
