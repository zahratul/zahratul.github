<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen_model extends CI_Model {

	public function all()
	{
		# select * from mahasiswa
		return $this->db->get('dosen')->result();
	}
	public function create($objek)
	{
		return $this->db->insert('dosen',$objek);

	}

	public function remove($nik)
	{
		$this->db->where('nik', $nik);
		return $this->db->delete('dosen');
	}

	public function get_id($nik)
	{
		$this->db->where('nik', $nik);
		return $this->db->get('dosen')->row();

	}
	public function update($nik, $objek)
	{
		$this->db->where('nik', $nik);
		return $this->db->update('dosen', $objek);

	}

}