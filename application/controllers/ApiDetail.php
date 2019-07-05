<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class ApiDetail extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
    }

    function index_get()
    {
        $cari = $this->input->get('s');
        $merk = $this->db->get_where('api_barang', array('nama_barang' => $cari))->result();
        $this->response(array("meals" => $merk));
    }
}
