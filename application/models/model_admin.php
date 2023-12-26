<?php
class Model_admin extends CI_Model
{
    public function get_data_admin()
    {
        // Ambil data dari tabel 'karyawan'
        $query = $this->db->get('admin');
        return $query->result_array();
    }

    public function getadminById($id_admin)
    {
        // Mengambil satu baris data karyawan berdasarkan kode karyawan
        $query = $this->db->get_where('admin', array('id_admin' => $id_admin));
        return $query->row(); // Mengembalikan satu baris hasil kueri
    }

    public function updateadmin($id_admin, $data)
    {
        // Lakukan update berdasarkan kode karyawan
        $this->db->where('id_admin', $id_admin);
        $this->db->update('admin', $data);
    }

    public function tambahadmin($data)
    {
        // Insert data karyawan ke dalam tabel 'karyawan'
        $this->db->insert('admin', $data);
    }

    public function hapusadmin($id_admin) {
        // Lakukan query untuk menghapus karyawan dari database berdasarkan $kode_karyawan
        $this->db->where('id_admin', $id_admin);
        $this->db->delete('admin');
    }
}
