<?php
class M_kasir extends CI_Model
{
	public function get_kategori_all()
	{
		$query = $this->db->get('tbl_kategori');
		return $query->result_array();
	}
	public function get_produk_kategori($kategori)
	{
		$query = $this->db->get_where('tbl_barang', array('id_kategori' => $kategori));
		return $query->result_array();
	}
}
