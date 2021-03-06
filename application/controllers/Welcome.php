<?php
class Welcome extends CI_Controller
{
  public function __construct(){
    parent::__construct();
    $this->load->model("User_model");
  }
    public function index()
    {
//        $this->session->sess_destroy();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->view('header.php');
        $this->load->view('cover.php');
        if($questions = $this->User_model->get_questions())
        {
            $questions['vister'] = true ;
            $this->load->view('questions_tab.php',$questions);
        }else{
            $this->load->view('questions_tab.php');
        }
        $this->load->view('footer.php');
    }
    public function display_question()
    {
        $this->load->view('header.php');
        if($data = $this->User_model->get_question($this->input->get('id')))
        {
           // echo "<pre>";
            // print_r($data);
//            print($this->session->userdata('id'));
            // $data['votes'] = $this->get_votes($this->input->get('id'));
            // print_r($data);
            // echo "</pre>";
             $data['vister'] = true ;
             $this->load->view('view_question.php',$data);
        }
        if($vote_data = $this->User_model->get_votes_vister($this->input->get('id')))
        {
          $vote_data['vister'] = true ;
          // echo "<pre>";
          // var_dump($vote_data);
          // echo "</pre>";
          $this->load->view('footer.php',$vote_data);
        }
    }
    public function login()
    {
        $this->load->library('form_validation');
        $this->load->view('header.php');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('password','Password','trim|required');
        if($this->form_validation->run())
        {
            $this->load->model('User_model');
            if($this->User_model->login())
            {
//                echo $this->session->userdata('id');
                redirect("/Home");
            }
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

}
?>
