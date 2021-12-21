<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Keahlian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("keahlian_model");
        $this->load->library('form_validation');
        $this->load->helper('rupiah_helper');
    }

    public function index()
    {   
        if($this->session->userdata('akses')=='admin' || $this->session->userdata('akses')=='petugas'){
            $data["keahlian"] = $this->keahlian_model->getAll();
            $this->load->view("admin/keahlian_view/list", $data);
        }   
        else
        {
            echo "Anda tidak berhak mengakses halaman ini";
        }
           
    }

    public function add()
    {   
        if($this->session->userdata('akses')=='admin' || $this->session->userdata('akses')=='petugas'){
            
            $keahlian = $this->keahlian_model;
            $validation = $this->form_validation;
            $validation->set_rules($keahlian->rules());

            if ($validation->run()) {
                $keahlian->save();
                $this->session->set_flashdata('success', 'Berhasil disimpan');
            }

            $this->load->view("admin/keahlian_view/new_form");
        }   
        else
        {
            echo "Anda tidak berhak mengakses halaman ini";
        }
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/keahlian');
       
        $keahlian = $this->keahlian_model;
        $validation = $this->form_validation;
        $validation->set_rules($keahlian->rules());

        if ($validation->run()) {
            $keahlian->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('admin/keahlian'));
        }

        $data["keahlian"] = $keahlian->getById($id);
        if (!$data["keahlian"]) show_404();
        
        $this->load->view("admin/keahlian_view/edit_form", $data);
    }

    

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->keahlian_model->delete($id)) {
            redirect(site_url('admin/keahlian'));
        }
    }

    public function cetak()
    {
        // load view yang akan digenerate atau diconvert
        // contoh kita akan membuat pdf dari halaman welcome codeigniter
         $data["keahlian"] = $this->keahlian_model->getAll();
        $this->load->view("admin/keahlian_view/cetak", $data);
        // dapatkan output html
        
        $html = $this->output->get_output();
        
        // Load/panggil library dompdfnya
        $this->load->library('dompdf_gen');
        
        // Convert to PDF
        $this->dompdf->load_html($html);
        $this->dompdf->render();

        
        
        //utk menampilkan preview pdf
        $this->dompdf->stream("welcome.pdf",array('Attachment'=>0));
        //atau jika tidak ingin menampilkan (tanpa) preview di halaman browser
        //$this->dompdf->stream("welcome.pdf");
    }
}
