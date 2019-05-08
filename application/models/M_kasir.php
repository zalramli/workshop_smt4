<?php
class M_kasir extends CI_Model
{
	function getKategori()
	{
		$query = $this->db->get('tbl_kategori');
		return $query->result_array();
	}
	public function get_produk_kategori($kategori)
	{
		if ($kategori > 0) {
			$this->db->where('id_kategori', $kategori);
		}
		$query = $this->db->get('tbl_barang');
		return $query;
	}
}
