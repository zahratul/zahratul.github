<?php 


class Home extends CI_Controller
{
	
	public function index()

	{
		// echo "Admin/home";
		$data['judul'] = 'Dashboard';
		$data['sub_judul'] = 'Halaman Utama';
		$data['halaman'] = 'admin/v_index';

		$this->load->view('admin/v_template',$data);
	}
	public function coba()
	{
		$data['judul'] = 'coba';
		$data['sub_judul'] = 'Halaman coba';
		$data['halaman'] = 'admin/v_coba';

		$this->load->view('admin/v_template',$data);
	}
}




