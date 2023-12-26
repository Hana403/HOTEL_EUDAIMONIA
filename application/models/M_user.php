<?php

class M_user extends CI_Model{

    public function get_user(){
        return $this->db->get('user');
    }

    public function insert_user($data){
        $this->db->insert('user', $data);
    }

    public function get_data_by_id($where){
        return $this->db->get_where('user', $where);

    }

    public function update_user($data, $id){
        $this->db->where('id_user', $id);
        $this->db->update('user', $data);
    }

    public function hapus_user($id){
        $this->db->where('id_user',$id);
        $this->db->delete('user');
    }
}

?>