<?php
class modelKategori extends CI_Model{
    public function dataBunga(){
        return $this->db->get_where("tb_barang",array('kategori' => 'bunga'));
    }
    public function dataPot(){
        return $this->db->get_where("tb_barang",array('kategori' => 'potBunga'));
    }
    public function dataPasir(){
        return $this->db->get_where("tb_barang",array('kategori' => 'pasir'));
    }
    public function dataBibit(){
        return $this->db->get_where("tb_barang",array('kategori' => 'bibit'));
    }
}