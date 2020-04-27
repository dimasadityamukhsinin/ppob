<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simple_login {

    protected $CI;

    //Load Model
    public function __construct()
    {
        $this->CI =& get_instance();
    }

    public function login($username,$password)
    {
        //Jika ada data pengguna, maka session akan dibuat
        if(($username == "admin") && ($password == "123456"))
        {
            $username = $cek->username;
            //Buat Session
            $this->CI->session->set_userdata('username',$username);
            //Jika sukses tampilkan halaman
            redirect(base_url('admin/dashboard'), 'refresh');
        }else
        {
            $this->CI->session->set_flashdata('warning', 'Username atau password salah!');
            redirect(base_url('login'), 'refresh');
        }
    }

    public function cek_login()
    {
        if($this->CI->session->userdata('username') == ""){
            $this->CI->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    //Fungsi Logout
    public function logout()
    {
        //Membuang semua session
        $this->CI->session->sess_destroy();
        $this->CI->session->set_flashdata('sukses', 'Anda Berhasil logout');
        redirect(base_url('login'), 'refresh');
    }
}
?>