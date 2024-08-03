<?php 

class dashboardAdmin extends CI_Controller{
    public function index(){
        $this->load->view('templatesAdmin/header');
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/dashboard');
        $this->load->view('templatesAdmin/footer');
    }
}