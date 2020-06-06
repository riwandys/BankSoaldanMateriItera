<?php 
    class User_model extends CI_Model {
        public function get_user($username) {
            return $this->db->get_where('user', ['username' => $username])->row_array();
        }
    }
    
?>