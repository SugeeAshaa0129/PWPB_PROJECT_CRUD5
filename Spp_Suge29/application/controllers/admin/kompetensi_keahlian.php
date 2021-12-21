<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kompetensi_keahlian extends CI_Controller
{
	
	public function __construct()
	{
	    parent::__construct();
	    $this->load->model('kompetensi_keahlian_model');
	}


	public function index()
	{
		$data['kompetensi_keahlian'] = $this->kompetensi_keahlian_model->getAll();
		$this->load->view('admin/kelas_view/list', $data);
	}


	// public function tampil_chained()
	// {
	// 	$id = $_POST['id_kk'];
	// 	$dropdown_chained = $this->Model_dropdown->tampil_data_chained($id);
	// 	foreach ($dropdown_chained->result() as $baris) {
	// 		echo "<option value='".$baris->id_kk."'>".$baris->nama_kk."</option>";
	// 	}
	// }


}