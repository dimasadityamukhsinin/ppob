<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simple_login {

    protected $CI;

    //Load Model
    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->model('user_model');
    }

    public function login($username,$password)
    {
        $cek = $this->CI->user_model->login($username,$password);
        //Jika ada data pengguna, maka session akan dibuat
        if($cek)
        {
            $id = $cek->user_id;
            $username = $cek->username;
            $nama = $cek->nama;
            $level = $cek->level;
            //Buat Session
            $this->CI->session->set_userdata('id',$id);
            $this->CI->session->set_userdata('username',$username);
            $this->CI->session->set_userdata('nama',$nama);
            //Jika sukses tampilkan halaman
            redirect(base_url('admin/dashboard'), 'refresh');
        }else
        {
            $this->CI->session->set_flashdata('warning', 'Username atau password salah!');
            redirect(base_url('admin/login'), 'refresh');
        }
    }

    public function cek_login()
    {
        if($this->CI->session->userdata('id') == ""){
            $this->CI->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('admin/login'),'refresh');
        }
    }

    //Fungsi Logout
    public function logout()
    {
        //Membuang semua session
        $this->CI->session->sess_destroy();
        $this->CI->session->set_flashdata('sukses', 'Anda Berhasil logout');
        redirect(base_url('admin/login'), 'refresh');
    }
}
?>