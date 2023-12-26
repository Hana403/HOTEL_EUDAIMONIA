<?php
class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
    }
    public function index()
    {
        $this->load->view('login');

    }
    public function user()
    {
        $this->load->view('loginuser');

    }

    public function admin(){
        $this->load->view('halaman_admin');
    }
  
   
   
    public function aksi_login(){
       
        $username = $this->input->post('username');
		$password = $this->input->post('password');

       

    
        $cek = $this->M_login->cek_admin($username,$password)->num_rows();
        if($cek > 0){
           $data_session = array(
            'nama' => $username,
            'status' => 'login'
           );
           $this->session->set_userdata($data_session);
          redirect('Login/admin');
        }else{
            echo "Username dan Password salah! ";
        }	 
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
}