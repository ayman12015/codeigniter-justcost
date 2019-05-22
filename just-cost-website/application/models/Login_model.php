<?php
class Login_model extends CI_Model
{
    public function login($username,$password){
        $this->db->where('username', $username);
        $this->db->where('password', md5($password));
        $res = $this->db->get('member_tbls');
        return $res->num_rows();
    }
 
}

?>
