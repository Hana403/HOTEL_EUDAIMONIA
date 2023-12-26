<?php
class Loginuser extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
    }
    public function index()
    {
        $this->load->view('loginuser');

    }
   

    public function aksi_user(){
       
        $username = $this->input->post('username');
		$password = $this->input->post('password');

       

    
        $cek = $this->M_login->cek_user($username,$password)->num_rows();
        if($cek > 0){
           $data_session = array(
            'nama' => $username,
            'status' => 'login'
           );
           $this->session->set_userdata($data_session);
           redirect('Tampilan');
        }else{
            echo "Username dan Password salah! ";
        }	
	}

    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('index.php/login'));
    }
}