<?php 
    class Brandproduktampil extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('produk_model');
        }
       public function index(){
        $keyword = $this->input->post('search');
        $data['data_kategori'] = $this->produk_model->kategori();
        $data['cari_produk']=$this->produk_model->cari_data_produk($keyword);
        $this->load->view('body/navbar',$data);
        $this->load->view('produk/pencarian_produk', $data);
        $this->load->view('body/footer');
       }
       public function tampilkankategori($brand_name)
       {
           $data['data_kategori'] = $this->produk_model->kategori();
           $data['kategoribrand'] = $this->produk_model->tampilkantegori($brand_name);
           $this->load->view('body/navbar',$data);
           $this->load->view('produk/kategori_view',$data);
           $this->load->view('body/footer');
       }
    }
    