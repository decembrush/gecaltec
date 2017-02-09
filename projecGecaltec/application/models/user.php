<?php
Class User extends CI_Model
{
    function login($username, $password)
    {
      $this -> db -> select('users.Id, User, Password, Mail, role.Name');
      $this -> db -> from('users');
      $this -> db -> where("(User='$username' OR Mail='$username')");
      //$this -> db -> where('ser', $username);
      $this -> db -> where('Password', $password);
      $this -> db -> join('role', "users.IdRol = role.Id");
      //$this -> db -> limit(1);

      $query = $this->db->get();

      if($query -> num_rows() > 0)
      {
        return $query->result();
      }
      else
      {
        return false;
      }
    }
    
    
    
}
?>
