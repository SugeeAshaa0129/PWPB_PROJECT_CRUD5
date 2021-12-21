<?php
class Login_model extends CI_Model{

private $_table = "login";

function cek_user($username,$password)
{
$this->db->where('username',$username);
$this->db->where('password',$password);
$result = $this->db->get('login',1);
return $result;
}

function getAll(){

	return $this->db->get($this->_table)->result();
}
}