<?php

Class Dashboard extends CI_Controller{


    public function __construct(){
        parent::__construct();
        $this->load->model('modelsistem2');
    }

    public function regiss(){
        $data['title'] = "Register";
        $data['regis'] = $this->modelsistem2->get_user();
        $data['c_regis'] = $this->modelsistem2->count_user();

        $this->load->view('l_register',$data);
    }

    // public function aksi_login(){
    //     $username = $this->input->post('user');
    //     $password = $this->input->post('pass');
    //     $where = array(
    //     'username' => $username,
    //     'password' => md5($password)
    //     );
    //     $cek=$this->modelsistem->cek_login("user",$where)->num_rows();

    //     if($cek >0){
    //         $data_session = array(
    //             'username' =>$username,
    //             'status' =>'login'
    //         );

    //         $this->session ->set_userdata($data_session);

    //         if($this->session->userdata('status') == 'login'){
    //         header("Location:".base_url().'sistem/home/'.$this->session->userdata('isername'));
    //         }else {
    //             echo "Login Gagal";
    //         }
    //     }else{
    //         echo "username dan password salah!";
    //     }
    // }

    function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }

    // public function index(){
    //     if ($this->session->userdata('status') != 'login') {
    //         redirect('Homepage/login');
    //     }else if($this->session->userdata('status') == 'login'){
    //         redirect('Dashboard/home/'.$this->session->userdata('usernama'));
    //     }
    // }

    public function login(){
        $this->load->view('l_login');
    }

    public function home(){
        if($this->session->userdata('status') != 'login'){
            redirect('dashboard/login');
        }
        $data['title'] = 'Home';
        $this->load->view('header',$data);
        $this->load->view('home');
        $this->load->view('footer');
    }

    // public function home(){
    //     $data['title'] = "Home";
    //     $this->load->view('home',$data);
    // }

    public function register(){
        $data['title'] = "Register";
        $this->load->view('l_register',$data);
    }

    public function data_kar(){
        $this->load->view('data_pelanggan',$data);
    }

    public function data_pelanggan(){
        $data['title'] = "Data Pelanggan";
        $this->load->view('home','$data');
    }


    public function simpan_data(){
        $this->modelsistem2->simpann_db();
    }
}