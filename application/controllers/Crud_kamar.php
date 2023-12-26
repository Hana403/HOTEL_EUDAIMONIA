<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud_kamar extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('M_kamar');
        $this->load->helper('form');
    }

    

    public function index(){
        $data['kamar'] = $this->M_kamar->get_kamar()->result_array();
        $this->load->view('kamar/main_kamar', $data);
    }

    public function tambah_kamar(){
        $this->load->view('kamar/tambah_kamar');
    }
    
    public function aksi_simpan(){
    $data = array(
    'id_tempat' => $this->input->post('id_tempat'),
    'nama_tempat' => $this->input->post('namaTempat'),
    'tipe' => $this->input->post('tipe'),
    'tempat_teks' => $this->input->post('keterangan'),
    'harga' => $this->input->post('harga'),
    );

    $insert_id =  $this->M_kamar->insert_kamar($data);
    $this->upload_image($data['id_tempat']);
    }

    private function upload_image($id_tempat){
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['width'] = 9999;
        $config['height'] = 9999;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar_tempat')){
            $error = $this->upload->display_errors();
            show_error($error);
        } else {
            $upload_data = $this->upload->data();
            $gambar_tempat = $upload_data['file_name'];

            $data_update = array('gambar_tempat' => $gambar_tempat);
            $this->M_kamar->update_tempat($id_tempat, $data_update);

            redirect('crud_kamar'); // Redirect to the index method
        }
    }

    public function delete($id){
        $this->M_kamar->delete_kamar($id);

        redirect('crud_kamar');
    }

    public function edit($id){
        $data['kamar'] = $this->M_kamar->get_kamar_by_id($id);
        $this->load->view('kamar/edit_kamar', $data);
    }

    public function aksi_update($id){
        $data = array(
            
        'nama_tempat' => $this->input->post('namaTempat'),
        'tipe' => $this->input->post('tipe'),
        'tempat_teks' => $this->input->post('keterangan'),
        'harga' => $this->input->post('harga'),
        );

        if(!empty($_FILES['gambar_tempat']['name'])){
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 9999;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('gambar_tempat')){
                $error = $this->upload->display_errors();
            }else{
                $upload_data = $this->upload->data();
                $gambar_tempat = $upload_data['file_name'];

                $data['gambar_tempat'] = $gambar_tempat;
            }
        }

        $this->M_kamar->update_kamar($id, $data);

        redirect('crud_kamar');
    }
}

?>