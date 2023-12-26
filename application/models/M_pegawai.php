<?php

class M_pegawai extends CI_Model{

    public function get_pegawai(){
        return $this->db->get('pegawai');
    }

    public function insert_pegawai($data){
        $this->db->insert('pegawai',$data);
    }

    public function get_data_by_id($where){
        return $this->db->get_where('pegawai', $where);

    }

    public function hapus_pegawai($id){
        $this->db->where('id_pegawai',$id);
        $this->db->delete('pegawai');
    }

    public function update_pegawai($data, $id){
        $this->db->where('id_pegawai', $id);
        $this->db->update('pegawai', $data);
    }
}

?>