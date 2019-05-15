<?php
class Pelanggan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_pelanggan');
    }
    public function index()
    {
        $data['pelanggan'] = $this->m_pelanggan->tampil_data()->result();
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('pelanggan/dataPelanggan', $data);
        $this->load->view('template/footer');
    }
}
