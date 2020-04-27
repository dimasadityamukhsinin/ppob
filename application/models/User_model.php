<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    //Load Model
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function login($username,$password)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where(array( 'username'  =>  $username,
                                'password'  =>  $password
                        ));
        $query = $this->db->get();
        return $query->row();
    }
}
?>