<?php 
 class Home extends CI_Controller {
     public function __construct()
     {
         parent::__construct();
         $this->load->model('produk_model');
         $this->load->library('cart');
     }
    public function index(){
        $data['pria']=$this->produk_model->produk_pria();
        $data['wanita']=$this->produk_model->produk_women();
        $this->load->view('body/navbar', $data);
        $this->load->view('produk/produk', $data);
        $this->load->view('body/footer');
    }
    public function detail_produk($slug){

        $apaaja=($this->uri->segment(3))?$this->uri->segment(3):0;
        $data['detail'] = $this->produk_model->get_detail_produk($slug)->row_array();
        $this->load->view('body/navbar', $data);
        $this->load->view('produk/detail_produk',$data);
        $this->load->view('body/footer');
    }
    public function beli(){
        if(!$this->session->has_userdata('customer_username')){
            redirect(base_url() . "Auth/Registrasi", $data);
        }else{
        $data = array(
            'id'      => $this->input->post('id'),
            'qty'     => $this->input->post('qty'),
            'price'   => $this->input->post('tshirt_price'),
            'name'    => $this->input->post('tshirt_name'),
            'img'     => $this->input->post('tshirt_image')
        );
        array(
            'id'      => $this->input->post('id'),
            'qty'     => $this->input->post('qty'),
            'price'   => $this->input->post('tshirt_price'),
            'name'    => $this->input->post('tshirt_name'),
            'img'     => $this->input->post('tshirt_image')
        );
        $this->cart->insert($data);
        $this->session->set_flashdata('flash','ditambahkan kedalam keranjang');
        redirect('Home');
    }
}    
    public function data_belanja (){
        $this->load->view('body/navbar');
        $this->load->view('data_keranjang/tampil_cart');
        $this->load->view('body/footer');
    }

    public function hapusdatabelanja($id){
        if ($id=="semua"){
            $this->cart->destroy();
        }
        $data = array('rowid'=>$id,
                        'qty'=>0);
        $this->session->set_flashdata('flash','DI hapus');
        $this->cart->update($data);
        redirect('home/data_belanja');
    }
    public function ubah_belanja ()
    {
        $cartbelanja = $_POST['cart'];
        foreach($cartbelanja as $id => $cart)
        {
            $rowid = $cart['rowid'];
            $price = $cart['price'];
            $gambar = $cart['gambar'];
            $jumlah = $price * $cart['qty'];
            $qty = $cart['qty'];

            $data   = array('rowid' =>  $rowid,
                            'price'  =>  $price,
                            'gambar' =>  $gambar,
                            'amount' =>  $jumlah,
                            'qty'    =>  $qty);
        $this->session->set_flashdata('flash','Dirubah');
        $this->cart->update($data);
        }
        redirect('home/data_belanja');
    }
    public function loginSubmit(){
        $data['pria']=$this->produk_model->produk_pria();
        $this->form_validation->set_rules('customer_username', 'Username', 'trim|required');
        $this->form_validation->set_rules('customer_password', 'password', 'trim|required');
        if($this->form_validation->run()==false){
            $this->session->set_flashdata('message','faill satu');
        }else{
            if($this->produk_model->cheklogin($_POST["customer_username"],$_POST["customer_password"])>0){
            $this->session->set_userdata("customer_username",$_POST["customer_username"]);
            $this->session->set_userdata("customer_password",$_POST["customer_password"]);
            redirect(base_url(). "Home");
        }else{
            $data["loginerror"]='username dan password yang anda masukkan salah';
            $this->session->set_flashdata("message",'faill');
            $this->load->view('body/navbar', $data);
            $this->load->view('produk/produk', $data);
            $this->load->view('body/footer');
        
            }
        }
    }
    public function Logout(){
        $this->session->sess_destroy();
        redirect('Home');
    }
 }