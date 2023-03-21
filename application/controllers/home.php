<?php
class home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('enquiry');
    }
    public function index()
    {
        $this->load->view('home');
        if($this->input->post("submit"))
        {
        $data['name']=$this->input->post('name');
        $data['email']=$this->input->post('email');
        $data['mobile']=$this->input->post('mobile');
        $data['message']=$this->input->post('message');
        $mobile=$this->input->post('mobile');
        if(preg_match('/^[0-9]{10}+$/', $mobile))
            {
                $response=$this->enquiry->insert($data);
                if($response==true)
                {
                    echo "<script>alert('Enquiry submitted successfully');</script>";
                }
                else
                {
                    echo "<script>alert('Error to submit enquiry');</script>";
                }
            
            } 
            else 
            {
            echo "<script>alert('Invalid Phone Number')</script>";
            }
        }

    }
 

   
}



?>