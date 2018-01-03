<?php
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
//        print_r($this->session->all_userdata());
        if($this->session->has_userdata('id'))
        {
            $this->load->model('User_model');          
            if(!$this->User_model->check_account($this->session->userdata('id')))
            {
                redirect('/Welcome');
            }
        }else{
            redirect('/Welcome');
        }
    }
    public function index()
    {
        $this->load->helper('form');
        $this->load->model('User_model');
        $this->load->library('form_validation');
        $data = array(
            'id'    => $this->session->userdata('id'),
            'name'  => $this->session->userdata('name'),
            'pic'   => $this->session->userdata('pic')
        );
        $this->load->view('header.php',$data);
        if($questions = $this->User_model->get_questions())
        {
            $this->load->view('questions_tab.php',$questions);
        }else{
            $this->load->view('questions_tab.php');
        }
        $this->load->view('footer.php');       
    }
    public function tags()
    {
        $this->load->view('header.php');
        $this->load->view('tags.php');
        $this->load->view('footer.php');
    }
    public function Ask()
    {
        $this->load->library('form_validation');
        $data = array(
            'id'    => $this->session->userdata('id'),
            'name'  => $this->session->userdata('name'),
            'pic'   => $this->session->userdata('pic')
        );
        $this->load->view('header.php',$data);
        $data = $this->session->all_userdata();
        $this->form_validation->set_rules('title','Title','trim|required');
        $this->form_validation->set_rules('post','Post','trim|required');
        $this->form_validation->set_rules('tags','Tags','trim');
        if($this->form_validation->run())
        {
            $this->load->model('User_model');
            if($this->User_model->ask($data['id']))
            {
                echo 'Done';
            }
        }
        $this->load->view('ask.php');
        
        $this->load->view('footer.php');
    }
    public function login()
    {
        $this->load->library('form_validation');
        $this->load->view('header.php');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('password','Password','trim|required');
        if($this->form_validation->run())
        {
            echo 'done';
        }
        $this->load->view('login.php');
        $this->load->view('footer.php');    
    }
    public function signup()
    {
        $this->load->library('form_validation');
        $this->load->view('header.php');
        $this->form_validation->set_rules('username','Username','trim|required');
        $this->form_validation->set_rules('email','Email','trim|required');
        $this->form_validation->set_rules('password','Passwrod','trim|required');
        if($this->form_validation->run())
        {
            $this->load->model('User_model');
            if($this->User_model->Create_user() == true)
            {
                header('location:complate_account');
            }else{
                echo 'insert user error ';
            }
        }
        $this->load->view('signup.php');
        $this->load->view('footer.php');
    }
    public function complate_account($error = null)
    {
        $this->load->library('form_validation');
        $this->load->view('header.php');
        $this->load->model('User_model');
        $data = $this->session->all_userdata();
        $data['profile'] = $this->User_model->check_profile($data['id']);
        $this->form_validation->set_rules('phone','Phone','trim|min_length[10]');
        $this->form_validation->set_rules('age','Age','trim|max_length[3]');
        $this->form_validation->set_rules('age','Age','trim|max_length[3]');
        if($this->form_validation->run())
        {
            $this->User_model->complate_account($data['id']);
        }
        $this->load->view('complate_account.php',$data);
        $this->load->view('footer.php');
    }
    public function insert_image(){
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
        $config['upload_path'] = './images/profile/';
        $config['allowed_types'] = 'png|jpg|jpeg';
        $config['remove_spaces'] = true;
        $this->load->library('upload',$config);
        if(!$this->upload->do_upload('userPic'))
        {
            $error = array('error'=>$this->upload->display_errors()) ;
            $this->complate_account($error);
//            $this->load->view('complate_account.php',$error);
        }else{
            $this->load->model('User_model');
            $image_name = $this->upload->data('file_name');
            $user_id = $this->session->userdata('id');
            if($this->User_model->insert_img($image_name,$user_id))
            {
                header('location:complate_account');
            }
        }
//        $this->complate_account();
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/Welcome');
    }
    public function search_tags()
    {
        $tag = $this->input->get_post('search'); 
        $this->load->model("User_model");
        if($data = $this->User_model->check_tag($tag))
        {
            header('content-type: text/json');
            echo json_encode($data) ;
        }

    }
    public function display_question()
    {
        $this->load->view('header.php');
        if($data = $this->User_model->get_question($this->input->get('id')))
        {
            echo "<pre>";
//            var_dump($data);
//            print($this->session->userdata('id'));
            
            echo "</pre>";
             $this->load->view('view_question.php',$data);
        }
        $this->load->view('footer.php');
    }
    public function insert_comment()
    {
        $comment = $this->input->post('post');
        $id   = $this->input->post("id");
        if($request = $this->User_model->insert_comment($comment,$id))
        {
            header("content-type: text/json");
            echo json_encode($request);
        }
    }
}
?>
