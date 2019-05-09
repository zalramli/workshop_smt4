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
    public function cart()
    {
        $this->load->view('kasir/tampil_cart');
    }
    public function hapusCart($rowid)
    {
        if ($rowid == "all") {
            $this->cart->destroy();
        } else {
            $data = array(
                'rowid' => $rowid,
                'qty' => 0
            );
            $this->cart->update($data);
        }
        redirect('kasir/cart');
    }
    public function ubah_cart()
    {
        $cart_info = $_POST['cart'];
        foreach ($cart_info as $id => $cart) {
            $rowid = $cart['rowid'];
            $price = $cart['price'];
            $foto = $cart['foto'];
            $amount = $price * $cart['qty'];
            $qty = $cart['qty'];
            $data = array(
                'rowid' => $rowid,
                'price' => $price,
                'foto' => $foto,
                'amount' => $amount,
                'qty' => $qty
            );
            $this->cart->update($data);
        }
        redirect('kasir/cart');
    }
}
