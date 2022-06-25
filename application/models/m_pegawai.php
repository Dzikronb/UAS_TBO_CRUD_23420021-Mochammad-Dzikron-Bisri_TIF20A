<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class m_pegawai extends CI_Model {

	function getDataPegawai(){
		$query = $this->db->get('data_pegawai');
		return $query->result();
	}

	function insertDataPegawai($data){
		$this->db->insert('data_pegawai', $data);
	}

	function getDataPegawaiDetail($idpegawai) {
		$this->db->where('idpegawai', $idpegawai);
		$query = $this->db->get('data_pegawai');
		return $query->row();
	}

	function updateDataPegawai($idpegawai, $data) {
		$this->db->where('idpegawai', $idpegawai);
		$this->db->update('data_pegawai', $data);
	}

	function deleteDataPegawai($idpegawai) {
		$this->db->where('idpegawai', $idpegawai);
		$this->db->delete('data_pegawai');
	}

}
