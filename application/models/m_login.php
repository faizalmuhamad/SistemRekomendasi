<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_login extends CI_Model {
    public function select_login ($user, $pass){
        $this->db->from('t_user');
        $this->db->where('username', $user);
        $this->db->where('password', $pass);
        return $this->db->get();
    }
}
