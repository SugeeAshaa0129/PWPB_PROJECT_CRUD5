<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas_model extends CI_Model
{
    private $_table = "petugas";

    public $id_petugas;
    public $nama_petugas;
    public $id_login;
    public $image;

    public function rules()
    {
        return [

            ['field' => 'nama_petugas',
            'label' => 'Nama Petugas',
            'rules' => 'required'],

            ['field' => 'id_login',
            'label' => 'Id Login',
            'rules' => 'required'],

            ['field' => 'image',
            'label' => 'Gambar',
            'rules' => 'required'],
            
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id_petugas)
    {
        return $this->db->get_where($this->_table, ["id_petugas" => $id_petugas])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_petugas = uniqid();
        $this->nama_petugas = $post["nama_petugas"];
        $this->id_login = md5($post["id_login"]);
        $this->image = $post["image"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_petugas = $post["id"];
        $this->nama_petugas = $post["nama_petugas"];
        $this->id_login = md5($post["id_login"]);
        $this->image = $post["image"];
        $this->db->update($this->_table, $this, array('id_petugas' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_petugas" => $id));
    }
}
