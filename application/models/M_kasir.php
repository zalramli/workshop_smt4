<?php
class M_kasir extends CI_Model
{

	function get_all_blog()
	{
		$result = $this->db->get('tbl_barang');
		return $result;
	}

	function search_blog($title)
	{
		$this->db->like('id_barang', $title, 'both');
		$this->db->order_by('id_barang', 'ASC');
		$this->db->limit(10);
		return $this->db->get('tbl_barang')->result();
	}
	function getBarang()
	{
		return $this->db->query("SELECT * FROM tbl_barang JOIN tbl_kategori USING (id_kategori) JOIN tbl_merk USING(id_merk)");
	}
}
