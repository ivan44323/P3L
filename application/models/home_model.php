<?php
class home_model extends CI_Model{
 
  function validate_user($username,$password)
  {
    $this->db->where('username',$username);
    $this->db->where('password',$password);
    $result_user = $this->db->get('pegawai',1);
    return $result_user;
  }

  function validate_user_role($id_role)
  {
    $this->db->where('id_role',$id_role);
    $result_user_role = $this->db->get('role',1);

    return $result_user_role;
  }
 
}