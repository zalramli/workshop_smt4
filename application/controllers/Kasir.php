<?php
class Kasir extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('cart');
        $this->load->model('m_kasir');
    }

    public function index()
    {
        $kategori = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['kategori'] = $this->m_kasir->get_kategori_all();
        $data['produk'] = $this->m_kasir->get_produk_kategori($kategori);
        $this->load->view('kasir/home', $data);
    }
    public function tambah()
    {
        $data_produk = array(
            'id' => $this->input->post('id'),
            'name' => $this->input->post('name'),
            'price' => $this->input->post('price'),
            'foto' => $this->input->post('foto'),
            'qty' => $this->input->post('qty')
        );
        $this->cart->insert($data_produk);
        redirect('kasir');
    }
}
