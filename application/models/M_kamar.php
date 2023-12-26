<?php

class M_kamar extends CI_Model{

    public function get_kamar(){
        return $this->db->get('kamar');
    }

    public function get_kamar_by_id($id){
        $query = $this->db->get_where('kamar', array('id_tempat' =>$id));
        return $query->row_array();
    }

    public function insert_kamar($data){
        $this->db->insert('kamar', $data);
    }

    public function update_tempat($id_tempat, $data){
    $this->db->where('id_tempat', $id_tempat);
    $result = $this->db->update('kamar', $data);

    return $result;
    }

    public function delete_kamar($id){
        $this->db->where('id_tempat', $id);
        $this->db->delete('kamar');
    }

    public function update_kamar($id_kamar, $data){
        $this->db->where('id_tempat', $id_kamar);
        $result = $this->db->update('kamar', $data);
        return $result; // Mengembalikan nilai hasil dari proses update
    }
    
}   