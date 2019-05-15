<?php 
class Pegawai extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_pegawai');
		$this->load->library('form_validation');
		
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
		$this->form_validation->set_rules('nama_pegawai','Nama','required');
		$this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('no_hp','Nomor HP','required|numeric');
		if($this->form_validation->run() == FALSE )
		{
			$this->load->view('template/header');
			$this->load->view('template/navbar');
			$this->load->view('pegawai/inputPegawai', $data);
			$this->load->view('template/footer');
			$this->session->set_flashdata('message', validation_errors());

		}else{
			
			$this->aksiAdd();
		}
	}
	public function aksiAdd()
	{	

		$this->m_pegawai->input_data();
		$this->session->set_flashdata('message', 'Data Berhasil Ditambahkan..!');
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
		$id_pegawai = $this->input->post('id_pegawai',true);
		$nama_pegawai = $this->input->post('nama_pegawai',true);
		$alamat = $this->input->post('alamat',true);
		$nomorhp = $this->input->post('no_hp',true);
		$id_jabatan = $this->input->post('id_jabatan',true);

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


?>