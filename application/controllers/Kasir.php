<?php
class Kasir extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('cart');
        $this->load->model('m_kasir');
        $this->load->database();
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
    public function check_out()
    {
        $data['pelanggan'] = $this->m_kasir->buat_kodePelanggan();
        $data['transaksi'] = $this->m_kasir->buat_kodeTransaksi();
        $data['kategori'] = $this->m_kasir->get_kategori_all();
        $this->load->view('kasir/check_out', $data);
    }
    public function proses_transaksi()
    {
        $data_pelanggan = array(
            'id_pelanggan' => $this->input->post('id_pelanggan'),
            'nama_pelanggan' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('telp')
        );
        $grand_total = 0;
        if ($cart = $this->cart->contents()) {
            foreach ($cart as $item) {
                $grand_total = $grand_total + $item['subtotal'];
            }
        }
        $data_transaksi = array(
            'id_transaksi' => $this->input->post('id_transaksi'),
            'tanggal' => date('Y-m-d'),
            'total_harga' => $grand_total,
            'total_bayar' => 5000,
            'total_kembalian' => 500,
            'id_pegawai' => 'PGW001',
            'id_pelanggan' => $this->input->post('id_pelanggan')
        );

        $this->m_kasir->input_data($data_pelanggan, 'tbl_pelanggan');
        $this->m_kasir->input_data($data_transaksi, 'tbl_transaksi');
        if ($cart = $this->cart->contents()) {

            foreach ($cart as $item) {
                $data_detail = array(
                    'id_transaksi' => $this->input->post('id_transaksi'),
                    'id_barang' => $item['id'],
                    'qty' => $item['qty'],
                    'total_hrg' => $item['price'] * $item['qty']
                );
                $qq = $item['id'];
                $q = $this->db->query("SELECT * FROM tbl_barang WHERE id_barang='$qq'")->result();
                foreach ($q as $it) {
                    $ids = $item['id'];
                    $stok_awal = $it->stok_real;
                    $stok_akhir = $stok_awal - $item['qty'];
                    $this->db->query("UPDATE tbl_barang SET stok_real='$stok_akhir' WHERE id_barang='$ids'");
                }
                $this->m_kasir->input_data($data_detail, 'tbl_transaksidetail');
            }
        }
        $this->cart->destroy();
        redirect('kasir');
    }
    public function pemesanan()
    {
        $data['pemesanan'] = $this->m_kasir->getPemesanan();
        $this->load->view('kasir/pemesanan', $data);
    }
    public function detailPemesanan($id)
    {
        $sql = $this->db->query("SELECT * FROM tbl_pemesanandetail JOIN tbl_barang ON tbl_pemesanandetail.id_barang = tbl_barang.id_barang JOIN tbl_kategori ON tbl_barang.id_kategori=tbl_kategori.id_kategori JOIN tbl_merk ON tbl_barang.id_merk=tbl_merk.id_merk WHERE id_pemesanan='$id'");
        $data['detail'] = $sql->result();
        $sql2 = $this->db->query("SELECT * FROM tbl_pemesanan JOIN tbl_pelanggan ON tbl_pemesanan.id_pelanggan = tbl_pelanggan.id_pelanggan WHERE id_pemesanan='$id'");
        $data['pelanggan'] = $sql2->result();
        $this->load->view('kasir/detailPemesanan', $data);
    }
}
