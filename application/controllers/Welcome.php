<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
	parent::__construct();
	$this->load->helper('url');
	$this->load->model('tampil_model');
	$this->load->library('session');
}
	public function index()
	{
		
		$data['skripsi']=$this ->tampil_model ->ambil_data();
		$this->load->view('tampil_view', $data);
	}

	public function tambah(){
		$this->load->view('tambah_view');

	}

	public function simpan(){
	
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$progdi = $this->input->post('progdi');
		$judul = $this->input->post('judul');


		$data = array(
        'nim' => $nim,
        'nama' => $nama,
        'progdi' => $progdi,
        'judul' => $judul,
		);

		$this->tampil_model->simpan_data($data);
				$this->session->set_flashdata('Info','<div class="alert alert-success" role="alert">
			  Data Berhasil Disimpan!
			</div>');
		redirect ('welcome');
		redirect ('welcome');
	}

	public function edit(){
		$id = $this->uri->segment(3);
		$data['data_edit'] = $this->tampil_model->ambil_data_edit($id);

		$this->load->view('edit_view',$data);
	}
	public function simpan_edit(){
		$id = $this->input->post('nim');
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$progdi = $this->input->post('progdi');
		$judul = $this->input->post('judul');

		$data = array(
        'nim' => $nim,
        'nama' => $nama,
        'progdi' => $progdi,
        'judul' => $judul,
		);

		$this->tampil_model->update_data($data,$nim);
		$this->session->set_flashdata('Info','<div class="alert alert-success" role="alert">
			  Data Berhasil Diupdate!
			</div>');
		redirect ('welcome');
	}

	public function hapus(){
		$id = $this->uri->segment(3);
		$this->tampil_model->delete_data($id);

		$this->session->set_flashdata('Info','<div class="alert alert-danger" role="alert">
			  Data Berhasil Didelete!
			</div>');

		redirect ('welcome');
	}
}
