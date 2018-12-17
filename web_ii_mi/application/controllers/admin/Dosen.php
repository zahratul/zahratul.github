<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dosen_model');

	}


	public function index()
	{
		$data['judul']='Halaman Dosen';
		$data['sub_judul']='Halaman Dosen';
		$data['halaman']='admin/v_dosen';

		$data['isi_table']= $this->Dosen_model->all();

		$this->load->view('admin/v_template' , $data);

	}
	public function tambah()
	{
		$data['judul']='Data Dosen';
		$data['sub_judul']='Halaman Tambah Data Dosen';
		$data['halaman']='admin/v_dosen_tambah';
		

		$this->load->view('admin/v_template' , $data);


	}




}