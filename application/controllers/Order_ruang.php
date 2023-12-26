<?php
class Order_ruang extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load model yang diperlukan
        $this->load->model('OrderModel2');
    }

    public function index() {
        // Tampilkan halaman form pemesanan
        $this->load->view('order_form_ruang');
    }

    public function process_order() {
        // Tangkap data 
        $nama_user = $this->input->post('nama_user');
        $tanggal = $this->input->post('tanggal');
        $jumlah = $this->input->post('jumlah');
        $nama_kamar = $this->input->post('nama_kamar');
        $pembayaran = $this->input->post('pembayaran');
        $total = 0;

        // Hitung total 
        switch ($nama_kamar) {
            case 'Theater':
                $total = 9000000 * $jumlah;
                break;
            case 'PU-Shaped Room':
                $total = 5000000 * $jumlah;
                break;
            case 'Meeting Room':
                $total = 1200000 * $jumlah;
                break;
            default:
                // Belum kepikiran
                break;
        }

        // Simpan data ke database
        $this->OrderModel2->save_order($nama_user, $tanggal, $jumlah, $nama_kamar, $pembayaran, $total);
        redirect('Order_ruang/show_latest_order');

    }

    public function show_latest_order() {
        // Panggil model untuk mengambil data nota terbaru
        $data['latest_order'] = $this->OrderModel2->get_latest_order(); 
    
        // Tampilkan data ke view
        $this->load->view('latest_order_view', $data); 
    }
    
}
