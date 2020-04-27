<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Telkomsel extends CI_Controller {

    //Load Model
    public function __construct()
    {
        parent::__construct();
        // Proteksi Halaman
        $this->simple_login->cek_login();
    }

    public function index()
    {
        $data = array(  'title'     =>  'Telkomsel',
                        'isi'       =>  'admin/telkomsel/list'
                    );
        $this->load->view('admin/layout/wrapper',$data,false);
    }

    public function pulsa()
    {
        $data = array(  'title'     =>  'Pulsa Telkomsel',
                        'isi'       =>  'admin/telkomsel/pulsa'
                    );
        $this->load->view('admin/layout/wrapper',$data,false);
    }

    public function data()
    {
        $data = array(  'title'     =>  'Paket Data Internet Telkomsel',
                        'isi'       =>  'admin/telkomsel/data'
                    );
        $this->load->view('admin/layout/wrapper',$data,false);
    }

    public function tambah($code, $nomor)
    {
        $username   = "082268186048";
        $apiKey   = "7265ca6091195377";
        $ref_id  = uniqid('');
        $signature  = md5($username.$apiKey.$ref_id);

        $json = '{
                "commands"    : "topup",
                "username"    : "082268186048",
                "ref_id"      : "'.$ref_id.'",
                "hp"          : "'.$nomor.'",
                "pulsa_code"  : "'.$code.'",
                "sign"        : "'.md5($username.$apiKey.$ref_id).'"
                }';

        $url = "https://testprepaid.mobilepulsa.net/v1/legacy/index";

        $ch  = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $data = curl_exec($ch);
        curl_close($ch);

        print_r($data);
    }
}
?>