<?php

class Crud_user extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('M_user');
    }

    public function index(){
        $data['user'] = $this->M_user->get_user()->result_array();
        $this->load->view('user/main_user', $data);
    }

    public function tambah_user(){
        $this->load->view('user/tambah_user');
    }

    public function aksi_simpan(){
        $namaUser = $this->input->post('namaUser');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $data = array(
            'nama_user' =>$namaUser,
            'password' =>$password,
            'email' =>$email
        );

        $this->M_user->insert_user($data);
        if($this->db->affected_rows()){
            redirect('loginuser');
        }else{
            redirect('crud_user/tambah_user');
        }
    }

    public function edit($id_user){
        $where = array('id_user' => $id_user);
        $data['user'] = $this->M_user->get_data_by_id($where)->result();
        $this->load->view('user/edit_user', $data);
    }
    

    public function aksi_edit(){
        $idUser = $this->input->post('id_user');
        $namaUser = $this->input->post('namaUser');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $data = array(
            'nama_user' => $namaUser,
            'password' => $password,
            'email' => $email,
        );

        $this->M_user->update_user($data, $idUser);

        if($this->db->affected_rows()){
            redirect('crud_user');
        }else{
            redirect('crud_user/edit/'.$idUser);
        }
    }

    public function hapus($id_user){
        $this->M_user->hapus_user($id_user);
        if($this->db->affected_rows()){
            redirect('crud_user');
        }else{
            echo "Data gagal dihapus";
        }
    }

}

?>