<?php
class admin_model extends CI_Model
{
    public function register_user_exists($email)
    {
        return $this->db->where('email',$email)->get('admin')->row();
    }
    public function getTrainingID($id)
    {
        $query=$this->db->query("select * from training where id=$id");
        return $query->result();
    }
    public function getTrainerID($id)
    {
        $query=$this->db->query("select * from trainer where id=$id");
        return $query->result();
       
       
    }
    public function getTraining()
    {
        $query=$this->db->get('training');
        return $query->result();
    }
    public function getTrainers()
    {
        $query=$this->db->get('trainer');
        return $query->result();
    }
    public function user_datas()
    {
        $query=$this->db->get('user');
        return $query->result();
    }
    public function enquiry_datas()
    {
        $query=$this->db->get('enquiry');
        return $query->result();
    }
    public function addworkout($data)
    {
        $this->db->insert("training",$data);
        return true;
    }
    public function addtrainer($data)
    {
        $this->db->insert("trainer",$data);
        return true;
    }
    public function getworkout()
    {
        $query=$this->db->get("training");
        return $query->result();
    }
    
    public function delete_training($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('training');
        return true;
    }
    public function delete_trainers($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('trainer');
        return true;
    }
    public function edittraining($name,$description,$monday,$tuesday,$wednesday,$thursday,$friday,$saturday,$id)
    {
        $this->db->query("update training set name='$name',description='$description',monday='$monday',tuesday='$tuesday',wednesday='$wednesday',
        thursday='$thursday',friday='$friday',saturday='$saturday' where id=$id");
        
    }
    public function edittrainer($name,$workout,$id)
    {
        $this->db->query("update trainer set name='$name',workout='$workout' where id=$id");

    }
    public function manageTrainee()
    {
        $query=$this->db->get("trainee");
        return $query->result();
    }
    public function updateTrainee($status,$id)
    {
        $this->db->query("update trainee set status='$status' where id=$id");
        return true;
    }
}

?>