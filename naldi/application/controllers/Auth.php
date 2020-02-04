<?php 


class Auth extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->database(); 
        $this->load->library('form_validation');
        $this->load->model('Usermodel'); 
}
    public function index(){
        $this->load->view('body/navbar');
        $this->load->view('produk/produk');
        $this->load->view('body/footer');
    }
    public function Registrasi(){
        $data['ambilprov']=$this->Usermodel->ambilprovinsi();

        $this->form_validation->set_rules('customer_name', 'Nama', 'trim|required|min_length[4]|max_length[22]');
        $this->form_validation->set_rules('customer_email', 'Email', 'trim|required|valid_email|is_unique[ms_customer.customer_email]');
        $this->form_validation->set_rules('customer_phone', 'No Telepon', 'trim|required|min_length[10]|max_length[12]');
        $this->form_validation->set_rules('customer_address', 'alamat', 'trim|required|min_length[10]|max_length[50]');
        $this->form_validation->set_rules('customer_username', 'Username', 'trim|required|is_unique[ms_customer.customer_username]');
        $this->form_validation->set_rules('customer_password', 'Password', 'trim|required|min_length[5]|is_unique[ms_customer.customer_password]');

        $this->form_validation->set_message('required', '{field} Mohon isi data dengan benar');
        $this->form_validation->set_message('valid_email', 'format email tidak benar');
        $this->form_validation->set_message('numeric', 'No. hp Harus angka');
        $this->form_validation->set_message('is_unique', '%s telah dipakai,');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('body/navbar',$data);
            $this->load->view('registrasi_user/registrasi',$data);
            $this->load->view('body/footer');
        }else{
            $this->Usermodel->submituser();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('Auth/Registrasi');
        }
    }
    public function profile(){
        $data['get_session']= $this->Usermodel->get_session_login($this->session->userdata('customer_username'));
        $this->load->view('body/navbar', $data);
        $this->load->view('registrasi_user/Profile_user', $data);
        $this->load->view('body/footer');
    }
    public function editusersubmit(){
        $customer_username = $this->session->userdata('customer_username');
        $customer_email    = $_POST['customer_email'];
        $customer_phone    = $_POST['customer_phone'];
        $customer_address  = $_POST['customer_address'];
        $provinsi          = $_POST['provinsi'];
        $customer_name     = $_POST['customer_name'];
        $customer_password = $_POST['customer_password'];

        $sql="UPDATE ms_customer set customer_name='" . $customer_name . "', customer_email='" . $customer_email . "', customer_phone='" . $customer_phone . "',customer_address='" . $customer_address . "', provinsi='" . $provinsi . "', customer_username='" . $customer_username . "', customer_password='" . $customer_password . "' WHERE customer_username='" . $customer_username."'";
    $query=$this->db->query($sql);
    $this->session->set_flashdata('flash', 'dirubah');
    redirect('Auth/profile');
    }
}