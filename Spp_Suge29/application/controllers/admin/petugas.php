<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("petugas_model");
        $this->load->library('form_validation');
    }

    public function index()
    {   
        if($this->session->userdata('akses')=='admin' || $this->session->userdata('akses')=='petugas'){
            $data["petugas"] = $this->petugas_model->getAll();
            $this->load->view("admin/petugas_view/list", $data);
        }   
        else
        {
            echo "Anda tidak berhak mengakses halaman ini";
        }
           
    }

    public function add()
    {   
        if($this->session->userdata('akses')=='admin' || $this->session->userdata('akses')=='petugas'){
            
            $petugas = $this->petugas_model;
            $validation = $this->form_validation;
            $validation->set_rules($petugas->rules());

            if ($validation->run()) {
                $petugas->save();
                $this->session->set_flashdata('success', 'Berhasil disimpan');
            }

            $this->load->view("admin/petugas_view/new_form");
        }   
        else
        {
            echo "Anda tidak berhak mengakses halaman ini";
        }
    }

    public function edit($id_petugas = null)
    {
        if (!isset($id_petugas)) redirect('admin/petugas');
       
        $petugas = $this->petugas_model;
        $validation = $this->form_validation;
        $validation->set_rules($petugas->rules());

        if ($validation->run()) {
            $petugas->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('admin/petugas'));
        }

        $data["petugas"] = $petugas->getById($id_petugas);
        if (!$data["petugas"]) show_404();
        
        $this->load->view("admin/petugas_view/edit_form", $data);
    }

    public function delete($id_petugas=null)
    {
        if (!isset($id_petugas)) show_404();
        
        if ($this->petugas_model->delete($id_petugas)) {
            redirect(site_url('admin/petugas'));
        }
    }
}
