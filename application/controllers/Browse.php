<?php

class Browse extends CI_Controller{

	

	public function index(){
		$data['judul'] = 'Browse';
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/Browse', $data);
		
	}

		public function BrowseSong()
	{

		$data['judul'] = 'Browse';
		$data['song'] = $this->T->getAllMahasiswa();
		if ($this->input->post('keyword')) {
			$data['mahasiswa'] = $this->Mahasiswa_model->cariDataMahasiswa();
		}
		$this->load->view('templates/header', $data);
		$this->load->view('mahasiswa/index', $data);
		$this->load->view('templates/footer');
	}
}