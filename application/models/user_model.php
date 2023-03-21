<?php
class user_model extends CI_Model
{
    public function display_trainers()
    {
        $query=$this->db->get('trainer');
        return $query->result();
    }
    public function display_training()
    {
        $query=$this->db->get('training');
        return $query->result(); 
    }
    public function booking($data)
    {
        $this->db->insert('trainee',$data);
        return true;
    }
    public function viewuserid($id)
    {
        $query=$this->db->query("select * from trainee where email='$id'");
        return $query->result();
        
    }
    public function editinfo($id)
    {
        $query=$this->db->query("select * from user where id='$id'");
        return $query->result(); 
    }
    public function updateinfo($name,$password,$id)
    {
        $this->db->query("update user set name='$name',password='$password' where id=$id");
        return true;
    }
    public function timing()
    {
        $query=$this->db->get('training');
        return $query->result();
    }
   
}

?>