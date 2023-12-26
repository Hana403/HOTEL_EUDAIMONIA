<?php
class OrderController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load model yang diperlukan
        $this->load->model('OrderModel');
    }

    public function index() {
        // Tampilkan halaman form pemesanan
        $this->load->view('order_form');
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
            case 'Deluxe Room':
                $total = 1305000 * $jumlah;
                break;
            case 'Premier Room':
                $total = 1710000 * $jumlah;
                break;
            case 'Executive Room':
                $total = 3870000 * $jumlah;
                break;
            default:
                // Belum kepikiran
                break;
        }

        // Simpan data ke database
        $this->OrderModel->save_order($nama_user, $tanggal, $jumlah, $nama_kamar, $pembayaran, $total);
        redirect('OrderController/show_latest_order');

    }

    public function show_latest_order() {
        // Panggil model untuk mengambil data nota terbaru
        $data['latest_order'] = $this->OrderModel->get_latest_order(); 
    
        // Tampilkan data ke view
        $this->load->view('latest_order_view', $data); 
    }
    
}
