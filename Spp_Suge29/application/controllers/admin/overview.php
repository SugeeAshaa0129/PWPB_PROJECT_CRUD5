<?php

class Overview extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['petugas_model','pembayaran_model', 'siswa_model']);
        $this->load->library('form_validation');
        $this->load->helper('rupiah_helper');
    }

	public function index()
	{
         if($this->session->userdata('akses')=='admin' || $this->session->userdata('akses')=='petugas'){
            $data["petugas"] = $this->petugas_model->getAll();
            $data["pembayaran"] = $this->pembayaran_model->getAll();
            $data["jumlah_bayar"] = $this->pembayaran_model->total();
            $data["siswa"] = $this->siswa_model->graph();          
            $this->load->view('admin/overview_view', $data);
        }   
        else
        {
            echo "Anda tidak berhak mengakses halaman ini";
        }
	}

    
}