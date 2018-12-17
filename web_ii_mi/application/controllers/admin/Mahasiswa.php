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




}