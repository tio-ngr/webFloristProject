<?php
class invoice extends CI_Controller{
    public function index(){
        $data['invoice']=$this->modelInvoice->tampil_data();
        $this->load->view('templatesAdmin/header');
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/invoice',$data);
        $this->load->view('templatesAdmin/footer');
    }
    public function detail($id_invoice){
        $data['invoice']=$this->modelInvoice->ambil_Id_invoice($id_invoice);
        $data['pesanan']=$this->modelInvoice->ambil_Id_pesanan($id_invoice);
        $this->load->view('templatesAdmin/header');
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/detailInvoice',$data);
        $this->load->view('templatesAdmin/footer');
    }
}