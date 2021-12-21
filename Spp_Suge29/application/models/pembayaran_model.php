<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran_model extends CI_Model
{
    private $_table = "pembayaran";

    public $id_pembayaran;
    public $id_petugas;
    public $nisn;
    public $tgl_bayar;
    public $bulan_bayar;    
    public $tahun_bayar;
    public $id_spp;
    public $jumlah_bayar;
    
    public function rules()
    {
        return [

            ['field' => 'id_petugas',
            'label' => 'ID Petugas',
            'rules' => 'required'],

            ['field' => 'nisn',
            'label' => 'NISN',
            'rules' => 'required'],

            ['field' => 'tgl_bayar',
            'label' => 'Tanggal Bayar',
            'rules' => 'required'],

            ['field' => 'bulan_bayar',
            'label' => 'Bulan Bayar',
            'rules' => 'required'],

            ['field' => 'tahun_bayar',
            'label' => 'Tahun bayar',
            'rules' => 'required'],

            ['field' => 'id_spp',
            'label' => 'ID SPP',
            'rules' => 'required'],

            ['field' => 'jumlah_bayar',
            'label' => 'Jumlah Bayar',
            'rules' => 'required'],
        ];
    }

    public function getAll()
    {
        //return $this->db->get($this->_table)->result();
        $this->db->select('pembayaran.id_pembayaran,petugas.nama_petugas,siswa.nisn,pembayaran.tgl_bayar,pembayaran.bulan_bayar, pembayaran.tahun_bayar,spp.nominal,pembayaran.jumlah_bayar');
        $this->db->from('pembayaran');
        $this->db->join('petugas','petugas.id_petugas=petugas.id_petugas');
        $this->db->join('spp','spp.id_spp=spp.id_spp');
        $this->db->join('siswa','siswa.nisn=siswa.nisn');
        $query=$this->db->get();
        return $query->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_pembayaran" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_petugas = $post["id_petugas"];
        $this->nisn = $post["nisn"];
        $this->tgl_bayar = $post["tgl_bayar"];
        $this->bulan_bayar = $post["bulan_bayar"];
        $this->tahun_bayar = $post["tahun_bayar"];
        $this->id_spp = $post["id_spp"];
        $this->jumlah_bayar = $post["jumlah_bayar"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_pembayaran = $post["id"];
        $this->id_petugas = $post["id_petugas"];
        $this->nisn = $post["nisn"];
        $this->tgl_bayar = $post["tgl_bayar"];
        $this->bulan_bayar = $post["bulan_bayar"];
        $this->tahun_bayar = $post["tahun_bayar"];
        $this->id_spp = $post["id_spp"];
        $this->jumlah_bayar = $post["jumlah_bayar"];
        $this->db->update($this->_table, $this, array('id_pembayaran' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_pembayaran" => $id));
    }

    public function total()
    {
        $this->db->select_sum('jumlah_bayar');
        $query = $this->db->get('pembayaran');
        return $query->result();
    }
}
