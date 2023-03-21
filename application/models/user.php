<?php
class user extends CI_Model
{
    public function register($data)
    {
        $this->db->insert('user',$data);
        return true;
    }
    public function register_user_exists($email)
    {
        return $this->db->where('email',$email)->get('user')->row();
    }
    public function createUser($data)
    {
        $this->db->insert('user',$data);
    }
}


?>