<?php
class users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('user_model');

    }
    public function dashboard()
    {
            $user=$this->session->userdata('email');
            $this->load->view('dashboard',array('user',$user));
        
    }
    public function chooseTraining()
    {
        $result['data']=$this->user_model->display_training();
        $this->load->view('chooseTraining',$result);
        if($this->input->get('id'))
        {
            $data['workout']=$this->input->get('id');
            $data['wid']=$this->input->get('wid');
            $data['email']=$this->session->userdata('email');
            $response=$this->user_model->booking($data);
            if($response==true)
            {
                echo "<script>alert('Joined successfully');</script>";
              
            }
            else
            {
                echo "<script>alert('Error to join');</script>";
               
            }

        }
    }
    public function timing()
    {
        
        $result['data']=$this->user_model->timing();
        
        $this->load->view('timing',$result);
    }
    public function trainers()
    {
        $result['data']=$this->user_model->display_trainers();
        $this->load->view('viewTrainers',$result);

    }
    public function editinfo()
    {
        $id=$this->session->userdata('id');
        $data=$this->user_model->editinfo($id);
        $this->load->view('editinfo',array('data'=>$data));

        if($this->input->post('submit'))
        {
            $name=$this->input->post('name');
            $password=$this->input->post('password');
            $response=$this->user_model->updateinfo($name,$password,$id);
            if($response==true)
            {
                echo "<script>alert('Updated records successfully');</script>";
                redirect('users/editinfo');
            }
            else
            {
                echo "<script>alert('Error to update');</script>";
                redirect('users/editinfo');
            }
        }
    }

    public function viewusers()
    {
        $id=$this->session->userdata('email');
        $data=$this->user_model->viewuserid($id);
        $this->load->view('viewUserstatus',array('data'=>$data));
    }
    public function addtrainee()
    {

        $data['workout']=$this->input->get('id');
        $data['email']=$this->session->userdata('email');
        $response=$this->user_model->booking($data);
        if($response==true)
        {
            echo "<script>alert('Joined successfully');</script>";
            redirect('users/chooseTraining');
        }
        else
        {
            echo "<script>alert('Error to join');</script>";
            redirect('users/chooseTraining');
        }

    }
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->sess_destroy();
        redirect('login');
    }
}


?>