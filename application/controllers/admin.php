<?php
class admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
    }
    public function dashboard()
    {
        $this->load->view('admin/adminpanel');
       
    }
    public function updateTrainer($id)
    {
        $name=$this->input->post('name');
        $workout=$this->input->post('workout');
        $this->admin_model->edittrainer($name,$workout,$id);
        echo "<script>alert('data updated successfully');</script>";
        redirect('admin/managetrainers');


    }
    public function managetrainee()
    {
        $trainee['data']=$this->admin_model->manageTrainee();
        $this->load->view('admin/managetrainee',$trainee);
        if($this->input->post('update'))
        {
            $id=$this->input->post('id');
            $status=$this->input->post('status');
            $response=$this->admin_model->updateTrainee($status,$id);
            if($response==true)
            {
                echo "<script>alert('status updated');</script>";
                redirect("admin/managetrainee");
            }
            else
            {
                echo "<script>alert('Error to update');</script>";
            }
        }
    }
    public function updateTraining($id)
    {
        $name=$this->input->post('name');
        $description=$this->input->post('description');
                $monday=$this->input->post('monday');
                $tuesday=$this->input->post('tuesday');
                $wednesday=$this->input->post('wednesday');
                $thursday=$this->input->post('thursday');
                $friday=$this->input->post('friday');
                $saturday=$this->input->post('saturday');
                $this->admin_model->edittraining($name,$description,$monday,$tuesday,$wednesday,$thursday,$friday,$saturday,$id);
                echo "<script>alert('data updated successfully');</script>";
                redirect('admin/managetraining');


    }
    public function edittraining($id)
    {
        $data=$this->admin_model->getTrainingID($id);
        $this->load->view('admin/edit_training',array('data'=>$data));

    }
    public function edittrainers($id)
    {
        $data=$this->admin_model->getTrainerID($id);
        $this->load->view('admin/edit_trainers',array('data'=>$data));

    }

    public function managetraining()
    {
        $t=$this->admin_model->getTraining();
        $this->load->view('admin/manage_training',array('training'=>$t));
    }
    public function managetrainers()
    {
        $t=$this->admin_model->getTrainers();
        $this->load->view('admin/manage_trainers',array('trainers'=>$t));
    }
    public function delete_training($id)
    {
        $response=$this->admin_model->delete_training($id);
        if($response==true)
        {
            echo "<script>alert('deleted successfully');</script>";
            redirect('admin/managetraining');
        }
        else
        {
            echo "<script>alert('error to delete');</script>";
            redirect('admin/managetraining');
        }
    }
    public function delete_trainers($id)
    {
     $response=$this->admin_model->delete_trainers($id);
     if($response==true)
        {
            echo "<script>alert('deleted successfully');</script>";
            redirect('admin/managetrainers');
        }
        else
        {
            echo "<script>alert('error to delete');</script>";
            redirect('admin/managetrainers');
        }
    }
    public function index()
    {
        $this->load->view('admin/adminlogin');
        if($this->input->post('asubmit'))
        {
            $email=$this->input->post('email');
            $password=$this->input->post('password');
            if($datas=$this->admin_model->register_user_exists($email))
            {
                if($datas->password==$password)
                {
                    $mail=$datas->id;
                    $this->session->set_userdata("aid",$mail);
                    redirect('admin/dashboard');
                    echo "<script>alert('login successfully');</script>";
                }
                else
                {
                    echo "<script>alert('login error');</script>";
                }
                
            }
            else
            {
                echo "<script>alert('Login error');</script>";
            }
        }
    }
    public function viewuser()
    {
        $alluser=$this->admin_model->user_datas();
        $this->load->view('admin/viewusers',array('alluser'=>$alluser));
    }
    public function logout()
    {
        $this->session->unset_userdata('aid');
        $this->session->sess_destroy();
        redirect('admin');
    }
    public function viewenquiry()
    {
        $alluser=$this->admin_model->enquiry_datas();
        $this->load->view('admin/viewenquiry',array('alluser'=>$alluser));
    }
    public function addworkouts()
    {
        $this->load->view('admin/addworkouts');
        if($this->input->post('addworkout'))
        {
            $config["upload_path"]="./uploads/";
            $config["allowed_types"]="jpg|png|jpeg|PNG";
            $config["max_size"]=5024;

            $this->load->library("upload",$config);
            if($this->upload->do_upload('myimage'))
            {
                $img=$this->upload->data();
                $data['myimage']=$img["file_name"];

                $data['name']=$this->input->post('name');
                $data['description']=$this->input->post('description');
                $data['monday']=$this->input->post('monday');
                $data['tuesday']=$this->input->post('tuesday');
                $data['wednesday']=$this->input->post('wednesday');
                $data['thursday']=$this->input->post('thursday');
                $data['friday']=$this->input->post('friday');
                $data['saturday']=$this->input->post('saturday');
                $response=$this->admin_model->addworkout($data);
                if($response==true)
                {
                    echo "<script>alert('workouts added successfully');</script>";
                }
                else
                {
                    echo "<script>alert('Error to add workout');</script>";
                }

            }
            else
            {
                echo "<script>alert('image files only accepted jpg,png,jpeg ');</script>";
            }


        }


    }
    public function addtrainers()
    {
        $data=$this->admin_model->getworkout();
        $this->load->view('admin/addtrainers',array('data'=>$data));
        if($this->input->post('addtrainer'))
        {
            $config["upload_path"]="./uploads/";
            $config["allowed_types"]="jpg|png|jpeg";
            $config["max_size"]=5024;

            $this->load->library("upload",$config);
            if($this->upload->do_upload('myimage'))
            {
                $img=$this->upload->data();
                $datas['myimage']=$img["file_name"];

                $datas['name']=$this->input->post('name');
                $datas['workout']=$this->input->post('workout');
                $response=$this->admin_model->addtrainer($datas);
                if($response==true)
                {
                    echo "<script>alert('trainers added successfully');</script>";
                }
                else
                {
                    echo "<script>alert('trainers not added');</script>";
                }

            }
            else
            {
                echo "<script>alert('image files only accepted jpg,png,jpeg ');</script>";
            }


        }


    }
}

?>