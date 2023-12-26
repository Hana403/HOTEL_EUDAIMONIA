<?php
class M_login extends CI_Model{
    public function cek_admin($user,$p){
        return $this->db->get_where('pegawai',array('nama_pegawai'=>$user,'password' =>$p) );
    }

    public function cek_user($user,$p){
        return $this->db->get_where('user',array('nama_user'=>$user,'password' =>$p) );
    }
}

