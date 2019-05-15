<?php

class Transaksi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_transaksi');
    }
    public function index()
    {
        $data['transaksi'] = $this->m_transaksi->tampil_data()->result();
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('transaksi/dataTransaksi', $data);
        $this->load->view('template/footer');
    }
}
