<?php 
class DataBarang extends CI_Controller{
    public function index(){
        $data['barang']=$this->model_barang->view_data()->result();
        $this->load->view('templatesAdmin/header');
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/dataBarang',$data);
        $this->load->view('templatesAdmin/footer');
    }
    public function tambahAksi(){
        $nm_brg     =$this->input->post('nm_brg');
        $keterangan =$this->input->post('keterangan');
        $kategori   =$this->input->post('kategori');
        $harga      =$this->input->post('harga');
        $stok       =$this->input->post('stok');
        $gambar =$_FILES['gambar']['name'];
        if ($gambar=''){}else{
            $config ['upload_path']='./produk';
            $config ['allowed-types']='jpg|jpeg|png|svg|gif';

            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('gambar')){
                echo "Gambar gagal diupload";
            }else{
                $gambar=$this->upload->data('file_name');
            }
        }
        $data=array(
            'nm_brg'    => $nm_brg,
            'keterangan'=> $keterangan,
            'kategori'  => $kategori,
            'harga'     => $harga,
            'stok'      => $stok,
            'gambar'    => $gambar
        );

        $this->model_barang->tambah_barang($data,'tb_barang');
        redirect('admin/dataBarang/index');
    }
    public function edit($id){
        $where=array('id_brg'=>$id);
        $data['barang']=$this->model_barang->editBarang($where,'tb_barang')->result();
        $this->load->view('templatesAdmin/header');
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/editBarang',$data);
        $this->load->view('templatesAdmin/footer');
    }
    public function update(){
        $id =$this->input->post('id_brg');
        $nm_brg =$this->input->post('nm_brg');
        $keterangan =$this->input->post('keterangan');
        $kategori =$this->input->post('kategori');
        $harga =$this->input->post('harga');
        $stok =$this->input->post('stok');

        $data=array(
            'nm_brg'    => $nm_brg,
            'keterangan'=> $keterangan,
            'kategori'  => $kategori,
            'harga'     => $harga,
            'stok'      => $stok
        );
        $where=array(
            'id_brg' => $id
        );
        $this->model_barang->updateData($where,$data,'tb_barang');
        redirect('admin/dataBarang/index');
    }
    public function hapus($id){
        $where=array('id_brg' => $id);
        $this->model_barang->hapusData($where,'tb_barang');
        redirect('admin/dataBarang/index');
    }
}