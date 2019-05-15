<?php 
class Pegawai extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_pegawai');
		
	}
	public function index()
	
	{
		
		$data['peg']=$this->m_pegawai->getJoinJabatan();
		
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('pegawai/dataPegawai', $data);
		$this->load->view('template/footer');
	}

	public function add()
	{
		$data['kode'] = $this->m_pegawai->buat_kode();
		$data['jabatan']= $this->m_pegawai->getJabatan()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('pegawai/inputPegawai', $data);
		$this->load->view('template/footer');
	}

	public function aksiAdd()
	{	
		$id_pegawai = $this->input->post('id_pegawai');
		$nama_pegawai = $this->input->post('nama_pegawai');
		$alamat_pegawai = $this->input->post('alamat');
		$nohp_pegawai = $this->input->post('nohp');
		$id_jabatan = $this->input->post('jabatan');

		$data= array(
			'id_pegawai'=>$id_pegawai,
			'nama_pegawai'=>$nama_pegawai,
			'alamat'=>$alamat_pegawai,
			'no_hp'=>$nohp_pegawai,
			'id_jabatan'=>$id_jabatan
		);
		$this->m_pegawai->input_data($data, 'tbl_pegawai');
		redirect('pegawai');
	}
	public function edit($id)
	{
		$where = array('id_pegawai' => $id);

		$data['jabatan']= $this->m_pegawai->getJabatan()->result();
		$data['pegawai'] = $this->m_pegawai->edit_data($where, 'tbl_pegawai')->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('pegawai/editPegawai', $data);
		$this->load->view('template/footer');
	}

	public function update()
	{
		$id_pegawai = $this->input->post('id_pegawai');
		$nama_pegawai = $this->input->post('nama_pegawai');
		$alamat = $this->input->post('alamat');
		$nomorhp = $this->input->post('no_hp');
		$id_jabatan = $this->input->post('jabatan');

		$data = array(
			'nama_pegawai' => $nama_pegawai,
			'alamat'=> $alamat,
			'no_hp'=> $nomorhp,
			'id_jabatan'=> $id_jabatan
		);

		$where = array(

			'id_pegawai' => $id_pegawai,

		);

		$this->m_pegawai->update_data($where, $data, 'tbl_pegawai');
		redirect('pegawai');
	}

	function hapus($id){
		$where = array('id_pegawai' => $id);
		$this->m_pegawai->hapus_data($where,'tbl_pegawai');
		redirect('pegawai');
	}
}
