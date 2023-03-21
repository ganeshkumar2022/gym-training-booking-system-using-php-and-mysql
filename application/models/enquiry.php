<?php
class enquiry extends CI_Model
{
    
    public function insert($data)
    {
        $this->db->insert("enquiry",$data);
        return true;
    }
}

?>