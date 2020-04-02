<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tampil_model extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function ambil_data()
	{
		return $this->db->get('skripsi')->result();
	}

	public function simpan_data($data){
		$this->db->insert('skripsi', $data);
	}

	public function ambil_data_edit($id){
		$this->db->where('nim',$id);
		$query = $this->db->get('skripsi');
		return $query->result();
	}

	public function update_data($data,$nim){
		$this->db->where('nim', $nim);
	$this->db->update('skripsi', $data);
	}

	public function delete_data($id){
		$this->db->where('nim', $id);
		$this->db->delete('skripsi');
	}
}
