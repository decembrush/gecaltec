<?php
Class User extends CI_Model
{
    function login($username, $password)
    {
      $this -> db -> select('Id, User, Password, Mail');
      $this -> db -> from('users');
      $this -> db -> where("User='$username' OR Mail='$username')");
      $this -> db -> where('ser', $username);
      $this -> db -> where('Password', MD5($password));
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
