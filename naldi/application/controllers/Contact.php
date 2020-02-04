<?php 
class Contact extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Usermodel');
    }

    public function index(){
       
        $this->load->view('body/navbar');
        $this->load->view('contact');
        $this->load->view('body/footer');
    }
}

