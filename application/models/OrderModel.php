<?php
class OrderModel extends CI_Model {

    public function save_order($nama_user, $tanggal, $jumlah, $nama_kamar, $pembayaran, $total) {
        // Simpan data ke dalam tabel nota
        $data = array(
            'nama_user' => $nama_user,
            'tanggal' => $tanggal,
            'jumlah' => $jumlah,
            'nama_kamar' => $nama_kamar,
            'pembayaran' => $pembayaran,
            'total' => $total
        );
        $this->db->insert('nota', $data);
    }

    public function get_latest_order() {
        $this->db->order_by('id_nota', 'DESC'); 
        $this->db->limit(1); 
        $query = $this->db->get('nota'); 
        return $query->row(); 
    }
    
}
