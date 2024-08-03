<?php
class kategori extends CI_Controller{
    public function bunga(){
        $data['bunga']=$this->modelKategori->dataBunga()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('bunga',$data);
        $this->load->view('templates/footer');
    }
    public function potBunga(){
        $data['potBunga']=$this->modelKategori->dataPot()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('potBunga',$data);
        $this->load->view('templates/footer');
    }
    public function pasir(){
        $data['pasir']=$this->modelKategori->dataPasir()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pasir',$data);
        $this->load->view('templates/footer');
    }
    public function bibit(){
        $data['bibit']=$this->modelKategori->dataBibit()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('bibit',$data);
        $this->load->view('templates/footer');
    }
}