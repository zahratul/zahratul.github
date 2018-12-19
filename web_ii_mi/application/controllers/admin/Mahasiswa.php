<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa_model');

	}


	public function index()
	{
		$data['judul']='Halaman Mahasiswa';
		$data['sub_judul']='Halaman Mahasiswa';
		$data['halaman']='admin/v_mahasiswa';
		$data['isi_table']= $this->Mahasiswa_model->all();

		$this->load->view('admin/v_template' , $data);

	}
	public function tambah()
	{
		$data['judul']='Data Mahasiswa';
		$data['sub_judul']='Halaman Tambah Data Mahasiswa';
		$data['halaman']='admin/v_mahasiswa_tambah';
		

		$this->load->view('admin/v_template' , $data);


	}
	public function proses_tambah()
	{
		$obj = array(
			'nim' => $this->input->post('nim'),
			'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
			'program_studi' => $this->input->post('program_studi'),
			 );
		$this->Mahasiswa_model->create($obj);

		redirect('admin/Mahasiswa','refresh');

	}
	public function hapus($nim)
	{
		$this->Mahasiswa_model->remove($nim);

		redirect('admin/Mahasiswa','refresh');


	}
	public function edit($nim)
	{
		$data['judul']='Mahasiswa';
		$data['sub_judul']='Edit Data Mahasiswa';
		$data['halaman']='admin/v_mahasiswa_edit';

		$data['isi_data'] = $this->Mahasiswa_model->get_id($nim);
		

		$this->load->view('admin/v_template' , $data);

	}

	public function proses_edit()
	{
		$id = $this->input->post('nim');
		$obj = array(
			'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
			'program_studi' => $this->input->post('program_studi'),
			 );
		$this->Mahasiswa_model->update($id, $obj);

		redirect('admin/Mahasiswa','refresh');

	}




}