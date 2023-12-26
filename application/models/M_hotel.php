<?php
class M_hotel extends CI_Model{

    public function get_all(){
        return $this->db->get('kamar')->result_array();
    }

    public function get_id($id){
        $this->db->select('*');
        $this->db->from('kamar'); 
        $this->db->where('id_tempat',$id);
        $data = $this->db->get();
         return $data->result_array();
    }

    public function get_kamar(){
        $this->db->select('*');
       $this->db->from('kamar'); 
       $this->db->where('tipe', 'kamar');
       $data = $this->db->get();
        return $data->result_array();
    }

    public function get_ruang(){
        $this->db->select('*');
       $this->db->from('kamar'); 
       $this->db->where('tipe', 'ruang');
       $data = $this->db->get();
        return $data->result_array();
    }

    public function get_promo(){
        $this->db->select('*');
       $this->db->from('kamar'); 
       $this->db->where('tipe', 'promo');
       $data = $this->db->get();
        return $data->result_array();
    }



    

// Produces Select Query:
// SELECT * FROM Employees WHERE Department = 'Finance';
}