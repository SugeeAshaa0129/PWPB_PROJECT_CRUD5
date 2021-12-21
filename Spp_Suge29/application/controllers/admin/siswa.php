<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['siswa_model','kelas_model','spp_model','Login_model']);
        $this->load->library('form_validation');
    }

    public function index()
    {   
        if($this->session->userdata('akses')=='admin' || $this->session->userdata('akses')=='petugas'){
            $data["siswa"] = $this->siswa_model->getAll();
            $this->load->view("admin/siswa_view/list", $data);
        }   
        else
        {
            echo "Anda tidak berhak mengakses halaman ini";
        }
           
    }

    public function add()
    {   
        if($this->session->userdata('akses')=='admin' || $this->session->userdata('akses')=='petugas'){
            $data['id_kelas'] = $this->kelas_model->getkelas()->result();
            $data['id_spp'] = $this->spp_model->getAll();
            $data['id_login'] = $this->Login_model->getAll();
            $siswa = $this->siswa_model;
            $validation = $this->form_validation;
            $validation->set_rules($siswa->rules());

            if ($validation->run()) {
                $siswa->save();
                $this->session->set_flashdata('success', 'Berhasil disimpan');
            }

            $this->load->view("admin/siswa_view/new_form",$data);
        }   
        else
        {
            echo "Anda tidak berhak mengakses halaman ini";
        }
    }

    public function edit($nisn = null)
    {
        $data['id_kelas'] = $this->kelas_model->getkelas()->result();
        $data['id_spp'] = $this->spp_model->getAll();
        
        if (!isset($nisn)) redirect('admin/siswa');
       
        $siswa = $this->siswa_model;
        $validation = $this->form_validation;
        $validation->set_rules($siswa->rules());

        if ($validation->run()) {
            $siswa->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('admin/siswa');
        }

        $data["siswa"] = $siswa->getById($nisn);
        if (!$data["siswa"]) show_404();
        
        $this->load->view("admin/siswa_view/edit_form", $data);
    }

    public function delete($nisn=null)
    {
        if (!isset($nisn)) show_404();
        
        if ($this->siswa_model->delete($nisn)) {
            redirect(site_url('admin/siswa'));
        }
    }
}
