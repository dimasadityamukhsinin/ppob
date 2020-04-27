<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class callback extends CI_Controller {

    //Load Model
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        /* Script ini hanya membantu menyimpan dalam file saja
        * Hasil yg tersimpan silakan dianalisa agar dapat diproses oleh sistem Anda.
        */ 

        if($_SERVER['REMOTE_ADDR']=='172.104.161.223'){ // memastikan data terikirim dari server javah2h

        file_put_contents(base_url('data-callback/save.txt'), $_POST['content']); // menyimpan dalam file save.txt

        }
    }
}
?>