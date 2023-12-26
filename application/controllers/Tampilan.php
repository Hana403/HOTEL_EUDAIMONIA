<?php

class Tampilan extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('M_hotel');
       
    }

    public function index(){
        $data['promo'] = $this->M_hotel->get_promo();
        $this->load->view('Tampilan_depan',$data);  
    }

    public function about(){
        $this->load->view('aboutus');
    }

    public function Kamar(){
        $data['kamar'] = $this->M_hotel->get_kamar();
        $this->load->view('isi/konten_kamar',$data);
    }

    public function ruang(){
        $data['ruang'] = $this->M_hotel->get_ruang();
        $this->load->view('isi/konten_ruangan',$data);
    }
    public function promo(){
        $data['promo'] = $this->M_hotel->get_promo();
        $this->load->view('isi/konten_promo',$data);
    }



    public function hal_pegawai(){
        $this->load->view('pegawai/main_pegawai');
    }

    public function hal_kamar(){
        $this->load->view('kamar/main_kamar');
    }

    public function hal_user(){
        $this->load->view('user/main_user');
    }


    public function isi1($id){
        $data['isi1'] = $this->M_hotel->get_id($id);
        $data['kamar'] = $this->M_hotel->get_kamar();
        $data['ruang'] = $this->M_hotel->get_ruang();
        $data['promo'] = $this->M_hotel->get_promo();
        $this->load->view('isi/isi_konten', $data);
    }
}