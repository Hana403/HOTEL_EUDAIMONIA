<?php

class Pegawai extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('M_pegawai');
    }

    public function get_data(){
        $data = $this->M_pegawai->get_pegawai()->result_array();
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}

?>