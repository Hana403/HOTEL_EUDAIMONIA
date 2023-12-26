<?php 

class Crud_pegawai extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('M_pegawai');
    }

    public function index(){
        $data['pegawai'] = $this->M_pegawai->get_pegawai()->result_array();
        $this->load->view('pegawai/main_pegawai', $data);
    }

    public function tambah_pegawai(){
        $this->load->view('pegawai/tambah_pegawai');
    }

    public function aksi_simpan(){
        $namaPegawai =$this->input->post('namaPegawai');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $data = array(
            'nama_pegawai' => $namaPegawai,
            'password' => $password,
            'email' => $email
        );
        $this->M_pegawai->insert_pegawai($data);
        if($this->db->affected_rows()){
            redirect('crud_pegawai');
        }else{
            redirect('crud_pegawai/tambah_pegawai');
        }
    }
    public function edit($id_pegawai){
        $where = array('id_pegawai' => $id_pegawai);
        $data['pegawai'] = $this->M_pegawai->get_data_by_id($where)->result();
        $this->load->view('pegawai/edit_pegawai', $data);
    }

    public function hapus($id_pegawai){
        $this->M_pegawai->hapus_pegawai($id_pegawai);
        if($this->db->affected_rows()){
            redirect('crud_pegawai');
        }else{
            echo "Data gagal dihapus";
        }
    }

    public function aksi_edit(){
        $idPegawai = $this->input->post('id_pegawai');
        $namaPegawai = $this->input->post('namaPegawai');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $data = array(
            'nama_pegawai' => $namaPegawai,
            'password' => $password,
            'email' => $email
        );

        $this->M_pegawai->update_pegawai($data, $idPegawai);

        if($this->db->affected_rows()){
            redirect('crud_pegawai');
        }else{
            redirect('crud_pegawai/edit/'.$idPegawai);
        }
    }
}

?>