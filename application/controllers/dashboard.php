<?php

class Dashboard extends CI_Controller{
    public function index(){
        $data['barang']=$this->model_barang->view_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard',$data);
        $this->load->view('templates/footer');
    }
    public function tambahKeranjang($id){
        $barang=$this->model_barang->find($id);

        $data = array(
            'id'      => $barang->id_brg,
            'qty'     => 1,
            'price'   => $barang->harga,
            'name'    => $barang->nm_brg
            
    );
    
    $this->cart->insert($data);
    redirect('dashboard');
    }
    public function detailKeranjang(){
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('keranjang');
        $this->load->view('templates/footer');
    }
    public function hapusKeranjang(){
        $this->cart->destroy();
        redirect('dashboard/index');
    }
    public function pembayaran(){
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pembayaran');
        $this->load->view('templates/footer');
    }
    public function prosesPesanan(){
        $is_processed=$this->modelInvoice->index();
        if($is_processed){
            $this->cart->destroy();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('prosesPesanan');
            $this->load->view('templates/footer');
        }else{
            echo "Maaf Pesanan Anda Gagal Diproses";
        }
        
    }
    public function detail($id_brg){
        $data['barang']=$this->model_barang->detailBarang($id_brg);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detailBarang',$data);
        $this->load->view('templates/footer');
    }
}