<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class latihan extends CI_Controller {
public function latihan1($param = '')
	{
		$data['nama'] = 'Zahra';
		$data['prodi'] = 'd3mi';
		$data['tambahan'] = '$param';



		$this->load->view('v_latihan',$data);
	}
	public function detail(){
		$data['judul'] = 'Detail ';

		$this->load->view('v_detail',$data);
	}
}



