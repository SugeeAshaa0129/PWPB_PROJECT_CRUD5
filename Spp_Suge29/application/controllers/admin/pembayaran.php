<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['pembayaran_model', 'petugas_model', 'spp_model', 'siswa_model']);
        $this->load->library('form_validation');
        $this->load->helper('rupiah_helper');
    }

    public function index()
    {   
        if($this->session->userdata('akses')=='admin' || $this->session->userdata('akses')=='petugas'){
            $data["pembayaran"] = $this->pembayaran_model->getAll();
            $this->load->view("admin/pembayaran_view/list", $data);
        }   
        else
        {
            echo "Anda tidak berhak mengakses halaman ini";
        }
           
    }

    public function lihat_siswa()
    {   
        if($this->session->userdata('akses')=='admin' || $this->session->userdata('akses')=='petugas'){
            $data["pembayaran"] = $this->pembayaran_model->getSiswaBayar();
            $this->load->view("admin/pembayaran_view/list", $data);
        }   
        else
        {
            echo "Anda tidak berhak mengakses halaman ini";
        }
           
    }

    public function add()
    {   
        if($this->session->userdata('akses')=='admin' || $this->session->userdata('akses')=='petugas'){
            
            $data['id_petugas'] = $this->petugas_model->getAll();
            $data['id_spp'] = $this->spp_model->getAll();
            $data['nisn'] = $this->siswa_model->getAll();
            $pembayaran = $this->pembayaran_model;
            $validation = $this->form_validation;
            $validation->set_rules($pembayaran->rules());

            if ($validation->run()) {
                $pembayaran->save();
                $this->session->set_flashdata('success', 'Berhasil disimpan');
            }

            $this->load->view("admin/pembayaran_view/new_form", $data);
        }   
        else
        {
            echo "Anda tidak berhak mengakses halaman ini";
        }
    }

    public function edit($id = null)
    {
        $data['id_petugas'] = $this->petugas_model->getAll();
        $data['id_spp'] = $this->spp_model->getAll();
        $data['nisn'] = $this->siswa_model->getAll();

        if (!isset($id)) redirect('admin/pembayaran');
       
        $pembayaran = $this->pembayaran_model;
        $validation = $this->form_validation;
        $validation->set_rules($pembayaran->rules());

        if ($validation->run()) {
            $pembayaran->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["pembayaran"] = $pembayaran->getById($id);
        if (!$data["pembayaran"]) show_404();
        
        $this->load->view("admin/pembayaran_view/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->pembayaran_model->delete($id)) {
            redirect(site_url('admin/pembayaran'));
        }
    }
}
