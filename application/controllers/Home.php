<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_pegawai');
	}

	public function index()
	{
		$queryAllPegawai = $this->m_pegawai->getDataPegawai();
		$DATA =array('queryAllPgw' => $queryAllPegawai);
		$this->load->view('home', $DATA);
	}

	public function create()
	{
		$this->load->view('create');
	}

	public function update($idpegawai)
	{
		$queryPegawaiDetail = $this->m_pegawai->getDataPegawaiDetail($idpegawai);
		$DATA = array('queryPegawaiDetail' => $queryPegawaiDetail);
		$this->load->view('update', $DATA);
	}

	public function fungsiTambah()
	{
		$idpegawai = $this->input->post('idpegawai');
		$nama = $this->input->post('nama');
		$jabatan = $this->input->post('jabatan');
		$alamat = $this->input->post('alamat');
		$jeniskelamin = $this->input->post('jeniskelamin');
		$agama = $this->input->post('agama');
		$nohp = $this->input->post('nohp');
		$email = $this->input->post('email');

		$ArrInsert = array(
			'idpegawai' => $idpegawai,
			'nama' => $nama,
			'jabatan' => $jabatan,
			'alamat' => $alamat,
			'jeniskelamin' => $jeniskelamin,
			'agama' => $agama,
			'nohp' => $nohp,
			'email' => $email
			);

		$this->m_pegawai->insertDataPegawai($ArrInsert);
		redirect(base_url(''));

	}

	public function fungsiUpdate() 
	{
		$idpegawai = $this->input->post('idpegawai');
		$nama = $this->input->post('nama');
		$jabatan = $this->input->post('jabatan');
		$alamat = $this->input->post('alamat');
		$jeniskelamin = $this->input->post('jeniskelamin');
		$agama = $this->input->post('agama');
		$nohp = $this->input->post('nohp');
		$email = $this->input->post('email');
		
		$ArrUpdate = array(
			'nama' => $nama,
			'jabatan' => $jabatan,
			'alamat' => $alamat,
			'jeniskelamin' => $jeniskelamin,
			'agama' => $agama,
			'nohp' => $nohp,
			'email' => $email
		);

		$this->m_pegawai->updateDataPegawai($idpegawai, $ArrUpdate);
		redirect(base_url(''));
	}

	public function fungsiDelete($idpegawai) 
	{
		$this->m_pegawai->deleteDataPegawai($idpegawai);
		redirect(base_url(''));
	}

	

}


