<?php
use Google\client as googleClient;
use Google\Service\Oauth2;
class login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user');
        $this->load->library('session');
    }
    public function google_login()
    {
        $client=new googleClient();
        if($code=$this->input->get('code'))
        {
            $token=$client->getAccessToken($code);
            $client->setAccessToken($token);
            $oauth=new Oauth2($client);
            $user_info=$oauth->userinfo->get();
            $data['name']=$user_info->name;
            $data['email']=$user_info->email;
            $data['image']=$user_info->image;
            $this->user->createUser($data);
            $user=$this->user->register_user_exists($user_info->email);
            $this->session->set_userdata('user',$user);
            redirect('users/dashboard');

        }
        else
        {
           
        $client->setApplicationName('ganesh nishitha softwares google login');
        $client=setClientId('813949869935-qsqjdvu2eff5salbfas4b8pp006a1rns.apps.googleusercontent.com');
        $client=setCLientSecret('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');
        $client->setRedirectUri('http://localhost/gym/login/google_login');

        $url=$client->createAuthUrl('http://localhost/gym/login/google_login');
        header("Location:".filter_var($url,FILTER_SANITIZE_URL));

        }
        

    }
    public function index()
    {
        $this->load->view("login");
        if($this->input->post('lsubmit'))
        {
            $email=$this->input->post('email');
            $password=$this->input->post('password');
            if($datas=$this->user->register_user_exists($email))
            {
                if($datas->password==$password)
                {
                    $mail=$datas->email;
                    $id=$datas->id;
                    $this->session->set_userdata("id",$id);
                    $this->session->set_userdata("email",$mail);
                    redirect('users/dashboard');
                    echo "<script>alert('login successfully');</script>";
                }
                else
                {
                    echo "<script>alert('login error');</script>";
                }
                
            }
            else
            {
                echo "<script>alert('Email account not exists');</script>";
            }
        }
    }
}

?>