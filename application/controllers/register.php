<?php
class register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user');
    }
    public function index()
    {
        $this->load->view("register");
        if($this->input->post('rsubmit'))
        {
            $data['name']=$this->input->post('name');
            $data['email']=$this->input->post('email');
            $data['password']=$this->input->post('password');
            $email=$this->input->post('email');
            $password=$this->input->post('password');
            $cpassword=$this->input->post('cpassword');
            if($password==$cpassword)
            {
                
                if($dbmail=$this->user->register_user_exists($email))
                {
                    echo "<script>alert('email already exists');</script>";
                }
                else
                {
                $response=$this->user->register($data);
                if($response==true)
                {
                    echo "<script>alert('user registered successfully');</script>";

                }
                else
                {
                    echo "<script>alert('error to register');</script>";
                }
            }
            }
            else
            {
                echo "<script>alert('password and confirm password does not match...');</script>";
            }
        }
    }
}

?>