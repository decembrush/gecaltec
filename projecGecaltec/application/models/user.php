<?php
Class User extends CI_Model
{
    function login($username, $password)
    {
        $this -> db -> select('users.Id, User, Password, Mail, role.Name');
        $this -> db -> from('users');
        $this -> db -> where("(User='$username' OR Mail='$username')");
        //$this -> db -> where('ser', $username);
        $this -> db -> where('Password', md5($password));
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
    
    
    function findUserByMail($mail)
    {
        $this -> db -> select('users.Id, User, Password, Mail');
        $this -> db -> from('users');      
        $this -> db -> where('Mail', $mail);      
        $this -> db -> limit(1);

        $query = $this->db->get();

        if($query -> num_rows() > 0)
        {
          return $query->first_row();
        }
        else
        {
          return false;
        }
    }
    
    function findUserById($id)
    {
        $this -> db -> select('users.Id, User, Password, Mail');
        $this -> db -> from('users');      
        $this -> db -> where('Id', $id);      
        $this -> db -> limit(1);

        $query = $this->db->get();
        if($query -> num_rows() > 0)
        {
          return $query->first_row();
        }
        else
        {
          return false;
        }
    }
    
    
    function updateUserByIduser($id, $data){
          
        $this->db->where('Id', $id);
        $this->db->update('users', $data);
                
        if ($this->db->affected_rows()) {
           return true;                 
        }else{
           return false;
        }        
    }
    
    
}
?>
