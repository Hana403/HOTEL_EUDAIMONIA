<?php
class Model_user extends CI_Model
{
    public function get_data_user()
    {
        // Ambil data dari tabel 'pelanggan'
        $query = $this->db->get('user');
        return $query->result_array();
    }

    public function hapususer($id_user)
    {
        // Lakukan query untuk menghapus pelanggan dari database berdasarkan $id_pelanggan
        $this->db->where('id_user', $id_user);
        $this->db->delete('user');
    }

    public function tambahDatauser($data)
    {
        $this->db->insert('user', $data);
    }

    public function getuserById($id)
    {
        // Mengambil satu baris data pelanggan berdasarkan kode karyawan
        $query = $this->db->get_where('user', array('id_user' => $id));
        return $query->row(); // Mengembalikan satu baris hasil kueri
    }

    public function updateDatauser($id_user, $data) {
        $this->db->where('id_user', $id_user);
        $this->db->update('user', $data);
    }
}
