<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	// menampilkan data mahasiswa
    public function index(){

		$json = '{
		          "commands" : "pricelist",
		          "username" : "082268186048",
		          "sign"     : "10252912de019b48f3fb7beea83a6c74"
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
		$datas = array(	'data'	=>	json_decode($data,true));
		$this->load->view('welcome_message');
    }

    public function topup()
    {
    	$this->load->view('topup');
    }
}
