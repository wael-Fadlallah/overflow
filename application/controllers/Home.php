<?php
class Home extends CI_Controller{
    public function index()
    {
        $this->load->view('header.php');
        $this->load->helper('form');
        $this->load->view('signup.php');
        $this->load->view('questions_tab.php');
        $this->load->view('footer.php');
    }
}
?>
