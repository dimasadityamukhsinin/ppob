<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

    // Load Model
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        //Validasi 
        $this->form_validation->set_rules('username','Username','required',
                                         array('required' => '%s harus diisi'));
        
        $this->form_validation->set_rules('password','Password','required',
                                         array('required' => '%s harus diisi'));
        
        if($this->form_validation->run())
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $md5password = md5($password);
            //Proses ke simple login
            $this->simple_login->login($username,$md5password);
        }
        //Akhir Validasi
        
        $data = array(  'title' => 'Login',
                     );
        $this->load->view('admin/login',$data,FALSE);
    }
    
    //Fungsi logout
    public function logout()
    {
        // Ambil fungsi logout dari simple login
        $this->simple_login->logout();
    }
}