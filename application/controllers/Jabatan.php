<?php

class Jabatan extends CI_Controller
{
     function __construct()
    {
        parent::__construct();
        $this->load->model('m_jabatan');
    }

    public function index()
    {
        $data['jabatan'] = $this->m_jabatan->tampil_data()->result();
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('jabatan/dataJabatan', $data);
        $this->load->view('template/footer');
    }

    public function add()
    {
    	$data['kode'] = $this->m_jabatan->buat_kode();
    	$this->load->view('template/header');
    	$this->load->view('template/navbar');
    	$this->load->view('jabatan/inputJabatan',$data);
    	$this->load->view('template/footer');
    }

    public function store()
    {
    	$id_jabatan = $this->input->post('id_jabatan');
    	$nama_jabatan = $this->input->post('nama_jabatan');
    	$data = array(
    		'id_jabatan' => $id_jabatan,
    		'nama_jabatan' => $nama_jabatan
    	);
    	$this->m_jabatan->input_data($data, 'tbl_jabatan');
    	redirect('jabatan');
    }

    public function edit($id)
    {
        $where = array('id_jabatan' => $id);
        $data['jabatan'] = $this->m_jabatan->edit_data($where, 'tbl_jabatan')->result();
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('jabatan/editJabatan', $data);
        $this->load->view('template/footer');
    }
    public function update()
    {
    	$id_jabatan = $this->input->post('id_jabatan');
    	$nama_jabatan = $this->input->post('nama_jabatan');

    	$data = array(
    		'nama_jabatan' => $nama_jabatan
    	);

    	$where = array(
    		'id_jabatan' => $id_jabatan
    	);

    	$this->m_jabatan->update_data($where, $data, 'tbl_jabatan');
        redirect('jabatan');
    }

    public function hapus($id="")
    {
        $where = array('id_jabatan' => $id);
        $this->m_jabatan->hapus_data($where, 'tbl_jabatan');
        redirect('Jabatan/index');
    }
}
