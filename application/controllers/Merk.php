<?php
class Merk extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('barang/inputBarang');
        $this->load->view('template/footer');
    }
}
