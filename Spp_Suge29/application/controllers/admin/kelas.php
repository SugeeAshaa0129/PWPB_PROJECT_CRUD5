<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['kelas_model', 'kompetensi_keahlian_model']);
        $this->load->library('form_validation');
    }

    public function index()
    {   
         if($this->session->userdata('akses')=='admin' || 
            $this->session->userdata('akses')=='petugas'){
            $data["kelas"] = $this->kelas_model->getAll();
            $this->load->view('admin/kelas_view/list', $data);
         }   
         else
         {
             echo "Anda tidak berhak mengakses halaman ini";
         }
           
    }

    public function add()
    {   
        // if($this->session->userdata('akses')=='admin' || $this->session->userdata('akses')=='petugas'){
            
         $data['id_kk'] = $this->kompetensi_keahlian_model -> getAll(); 

            $kelas = $this->kelas_model;
            $validation = $this->form_validation;
            $validation->set_rules($kelas->rules());

            if ($validation->run()) {
                $kelas->save();
                $this->session->set_flashdata('success', 'Berhasil disimpan');
            }
           
            $this->load->view("admin/kelas_view/new_form",$data);
        // }   
        // else
        // {
        //     echo "Anda tidak berhak mengakses halaman ini";
        // }
    }

    public function edit($id = null)
    {   
        
        $data['id_kk'] = $this->kompetensi_keahlian_model->getAll();
        if (!isset($id)) redirect('admin/kelas');
        $kelas = $this->kelas_model;

        $validation = $this->form_validation;
        $validation->set_rules($kelas->rules());

        if ($validation->run()) {
            $kelas->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('admin/kelas'));
        }

        $data["kelas"] = $kelas->getById($id);
        if (!$data["kelas"]) show_404();
        
        $this->load->view("admin/kelas_view/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->kelas_model->delete($id)) {
            redirect(site_url('admin/kelas'));
        }
    }

    public function laporan_pdf(){

    $data = array(
        "dataku" => array(
            "nama" => "Petani Kode",
            "url" => "http://petanikode.com"
        )
    );

    $this->load->library('pdf');

    $this->pdf->setPaper('A4', 'potrait');
    $this->pdf->filename = "laporan-petanikode.pdf";
    $this->pdf->load_view('admin/kelas_view/pdf_kelas', $data);


}
}
