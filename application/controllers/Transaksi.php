<?php

class Transaksi extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('transaksi/inputTransaksi');
        $this->load->view('template/footer');
    }
}
