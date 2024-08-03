<?php
class Model_Barang extends CI_Model{
    public function view_data(){
        return $this->db->get('tb_barang');
    }
    public function tambah_barang($data,$table){
        $this->db->insert($table,$data);
    }
    public function editBarang($where,$table){
        return $this->db->get_where($table,$where);
    }
    public function updateData($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    public function hapusData($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function find($id){
        $result=$this->db->where('id_brg',$id)
                        ->limit(1)
                        ->get('tb_barang');
        if($result->num_rows() >0){
            return $result->row();
        }else{
            return array();
        }
    }
    public function detailBarang($id_brg){
        $result=$this->db->where('id_brg',$id_brg)->get('tb_barang');
        if($result->num_rows()>0){
            return $result->result();
        }else{
            return false;
        }
    }
}